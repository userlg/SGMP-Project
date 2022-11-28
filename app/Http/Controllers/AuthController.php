<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Project;

class AuthController extends Controller
{
    public function dashboard()
    {

        if (Auth::check()) {

            $projects = count(Project::where('user_id', Auth::user()->id)->get(['title', 'description']));

            return view('sgmp.dashboard', compact(['projects']));
        }
        return view('login');
    }
}
