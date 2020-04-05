<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitylogController extends Controller
{
    //

    

    public function index()
    {
        return view('activitylog/activitylog');
    }
}
