<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AppController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends AppController
{

    use AuthenticatesUsers;

    public function redirectTo()
    {
        return app()->getLocale() . '/';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
