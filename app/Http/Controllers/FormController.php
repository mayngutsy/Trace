<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FormController extends Controller
{
    public function userform($user)
    {
        $user = User::find($user);
        return view('/forms/how_to_form', ['user'=>$user]);
    }
}
