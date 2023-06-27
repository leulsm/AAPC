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
}
