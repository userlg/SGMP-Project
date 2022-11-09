<?php

namespace App\Http\Controllers;

use Laravel\Fortify\Fortify;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        return view('home');
    }
}
