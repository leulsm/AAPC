<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertController extends Controller
{
    //
    public function expertuserindex()
    {
        return view('expertuser.index');
    }
    public function assined()
    {
        return view('expertuser.assined');
    }
    public function previousrequest()
    {
        return view('expertuser.previousrequest');
    }
}
