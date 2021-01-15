<?php


namespace App\Http\Controllers;


class AuthController extends Controller
{

    public static function dashboard()
    {
        return view('home.dashboard');
    }
}
