<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function index()
    {
    	return view('user/login');
    }

    public function masuk()
    {
    	return view('user/home');
    }
}
