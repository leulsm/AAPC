<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laratrust\Laratrust;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->hasRole('user')) {
            return view('stuffuser.index');
        } else if (Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        } else if (Auth::user()->hasRole('expert')) {
            return view('expertuser.index');
        } else if (Auth::user()->hasRole('director')) {
            return view('directoruser.index');
        }
    }
}
