<?php

namespace App\Http\Controllers\Cabinet\Organization;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        return view('cabinet.organization.home');
    }
}
