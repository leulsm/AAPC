<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function staffuserindex()
    {
        return view('stuffuser.index');
    }
    public function statustable()
    {
        return view('stuffuser.statustable');
    }
    public function staffrequest()
    {
        return view('stuffuser.request');
    }
}
