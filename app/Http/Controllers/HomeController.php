<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        // $user = Auth::user();
        // dd($user);
        // return view('home', compact($user));
        
        //return view('home');
        return dd('OK');

    }
}
