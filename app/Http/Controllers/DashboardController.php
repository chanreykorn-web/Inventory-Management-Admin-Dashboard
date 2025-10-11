<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index
    public function dashboard() {
        return view('Dashboard.Dashboard');
    }
}
