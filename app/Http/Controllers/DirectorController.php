<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    //
    public function directoruserindex()
    {
        return view('directoruser.index');
    }
    public function softrequest()
    {
        return view('directoruser.softrequest');
    }
    public function approve()
    {
        return view('directoruser.approve');
    }
    public function oldrequests()
    {
        return view('directoruser.oldrequests');
    }
}
