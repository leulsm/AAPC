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
            return view('stuff.stuffhome');
        } else if (Auth::user()->hasRole('admin')) {
            return view('Admin.layouts.template');
        }
    }
}
