<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    //--------------------------------------------------------------------

}
