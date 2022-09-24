<?php

namespace App\Http\Controllers;

use Auth;
use Session;

class LogoutController extends Controller
{
    protected function logoutUser()
    {
        Auth::logout();
        Session::flush();

        return redirect('/');
    }
}
