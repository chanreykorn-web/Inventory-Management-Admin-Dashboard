<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- ✅ Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- ✅ Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="img">
                        </div>
                        <div class="login-userheading">
                            <h3>Create an Account</h3>
                            <h4>Continue where you left off</h4>
                        </div>
                        <form id="signupForm">
                            @csrf
                            <div class="form-login">
                                <label>Full Name</label>
                                <div class="form-addons">
                                    <input type="text" id="name" name="name"
                                        placeholder="Enter your full name" required>
                                    <img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img">
                                </div>
                            </div>

                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input type="email" id="email" name="email"
                                        placeholder="Enter your email address" required>
                                    <img src="{{ asset('assets/img/icons/mail.svg') }}" alt="img">
                                </div>
                            </div>

                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" id="password" name="password" class="pass-input"
                                        placeholder="Enter your password" required>
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>

                            <div class="form-login">
                                <button type="submit" class="btn btn-login w-100">Sign Up</button>
                            </div>
                        </form>

                        <div class="signinform text-center">
                            <h4>Already a user? <a href="{{ route('signin') }}" class="hover-a">Sign In</a></h4>
                        </div>

                        <div class="form-setlogin">
                            <h4>Or sign up with</h4>
                        </div>
                        <div class="form-sociallink">
                            <ul>
                                <li>
                                    <a href="{{ route('auth.google') }}">
                                        <img src="assets/img/icons/google.png" class="me-2" alt="google">
                                        Sign In with Google
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('auth.facebook') }}">
                                        <img src="assets/img/icons/facebook.png" class="me-2" alt="facebook">
                                        Sign In with Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="login-img">
                    <img src="{{ asset('assets/img/login.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#signupForm').submit(function(e) {
                e.preventDefault();

                let formData = {
                    _token: $('input[name="_token"]').val(),
                    name: $('#name').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                    password_confirmation: $('#password_confirmation').val()
                };

                // Disable button during request
                $('.btn-login').prop('disabled', true).text('Signing up...');

                $.ajax({
                    url: "{{ route('signup') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        showToast('success', 'Success', response.message ||
                            'Account created successfully!');
                        setTimeout(() => window.location.href = response.redirect || "/", 1500);
                    },
                    error: function(xhr) {
                        $('.btn-login').prop('disabled', false).text('Sign Up');

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            let messages = Object.values(errors).flat().join("<br>");
                            showToast('error', 'Validation Error', messages);
                        } else if (xhr.responseJSON && xhr.responseJSON.error) {
                            showToast('error', 'Sign Up Failed', xhr.responseJSON.error);
                        } else {
                            showToast('error', 'Server Error',
                                'Something went wrong. Please try again.');
                        }
                    }
                });
            });

            // Reusable toast function
            function showToast(type, title, message) {
                $('#toast-container').remove(); // remove existing toast

                let bgColor = type === 'error' ? 'toast-error' : 'toast-success';
                $('body').append(`
            <div id="toast-container" class="toast-container toast-top-right">
                <div class="toast ${bgColor}" aria-live="polite" style="display: block;">
                    <button type="button" class="toast-close-button" role="button">×</button>
                    <div class="toast-title">${title}</div>
                    <div class="toast-message">${message}</div>
                </div>
            </div>
        `);

                setTimeout(() => {
                    $('#toast-container').fadeOut(500, function() {
                        $(this).remove();
                    });
                }, 3000);
            }
        });
    </script>

</body>

</html>
