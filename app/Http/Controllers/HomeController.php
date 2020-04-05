<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }

    public function welcome($user)
    {
        $user = User::find($user);
        return view('/welcome', ['user'=>$user]);
    }


    public function homeUser($user)
    {
        $user = User::find($user);
        return view('/home', ['user'=>$user]);
    }
}
