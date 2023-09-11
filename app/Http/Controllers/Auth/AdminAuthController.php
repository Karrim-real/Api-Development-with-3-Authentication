<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{

    /**
     * login
     *
     * @return void
     */
    public function Login()
    {
        return view('auth.login');
    }

    /**
     * register
     *
     * @return void
     */
    public function Register()
    {
        return view('auth.signup');
    }

    /**
     * dashboard
     *
     * @return void
     */
    public function Dashboard()
    {
        return view('backend.dashboard');
    }

    /**
     * logout
     *
     * @return void
     */
    public function Logout()
    {
        return view('auth.logout');
    }
}
