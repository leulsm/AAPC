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
    public function singlerequestpage()
    {
        return view('stuffuser.singlerequestpage');
    }
    public function viewrequest()
    {
        return view('stuffuser.viewrequest');
    }
    public function editrequest()
    {
        return view('stuffuser.editrequest');
    }
    public function userprofile()
    {
        return view('stuffuser.userprofile');
    }
    public function setting()
    {
        return view('stuffuser.setting');
    }
}
