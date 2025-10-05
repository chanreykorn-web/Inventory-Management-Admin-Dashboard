<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //sign in
    public function signIn()
    {
        return view('auth.SignIn');
    }

    // Handle email/password login
    public function handleSignIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Login successful!',
                'redirect' => url('/') // 👈 you can change redirect URL
            ]);
        }

        return response()->json([
            'error' => 'Invalid email or password.'
        ], 401);
    }

    // Show forgot password form
    public function showForgotPassword()
    {
        return view('auth.ForgetPassword');
    }

    // Handle forgot password request, send 6-digit code
    public function sendResetCode(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);
        $code = random_int(100000, 999999);
        \DB::table('password_resets')->updateOrInsert([
            'email' => $request->email
        ], [
            'token' => $code,
            'created_at' => now()
        ]);
        \Mail::raw("Your password reset code is: $code", function($message) use ($request) {
            $message->to($request->email)->subject('Password Reset Code');
        });
        return redirect()->route('password.verify.code', ['email' => $request->email]);
    }

    // Show code verification form
    public function showVerifyCode(Request $request)
    {
        $email = $request->email;
        return view('auth.verify_code', compact('email'));
    }

    // Handle code verification and show reset form
    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|digits:6'
        ]);
        $record = \DB::table('password_resets')->where('email', $request->email)->where('token', $request->code)->first();
        if ($record) {
            return view('auth.reset_password', ['email' => $request->email]);
        }
        return back()->withErrors(['msg' => 'Invalid code.']);
    }

    // Handle password reset
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->password = bcrypt($request->password);
            $user->save();
            \DB::table('password_resets')->where('email', $request->email)->delete();
            return redirect('/signin')->with('status', 'Password reset successful.');
        }
        return back()->withErrors(['msg' => 'User not found.']);
    }

    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $user = User::firstOrCreate([
                'email' => $googleUser->getEmail(),
            ], [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'password' => bcrypt(uniqid()), // random password
            ]);
            Auth::login($user);
            return redirect('/');
        } catch (\Exception $e) {
            return redirect('/signin')->withErrors(['msg' => 'Google sign in failed.']);
        }
    }

    // Redirect to Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Handle Facebook callback
    public function handleFacebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();
            $user = User::firstOrCreate([
                'email' => $facebookUser->getEmail(),
            ], [
                'name' => $facebookUser->getName(),
                'facebook_id' => $facebookUser->getId(),
                'password' => bcrypt(uniqid()), // random password
            ]);
            Auth::login($user);
            return redirect('/');
        } catch (\Exception $e) {
            return redirect('/signin')->withErrors(['msg' => 'Facebook sign in failed.']);
        }
    }

    public function signUp()
    {
        return view('auth.Signup');
    }

    public function handleSignUp(Request $request)
    {
        // ✅ Validate incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // ✅ Create new user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // ✅ Optionally, auto-login the user after signup
        // Auth::login($user);

        // ✅ Return success response
        return response()->json([
            'message' => 'User registered successfully!',
            'user' => $user
        ], 201);
    }
}
