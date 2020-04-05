<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    //
   

    public function profile($user)
    {


    	$user = User::find($user);
    	return view('/profiles/profile',
    		['user'=>$user]
    	);
    }
}
