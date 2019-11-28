<?php

namespace App\Http\Controllers\Cabinet\Person;

use App\Http\Controllers\AppController;

class HomeController extends AppController
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        return view('cabinet.person.home');
    }
}
