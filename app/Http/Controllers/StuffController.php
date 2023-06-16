<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StuffController extends Controller
{
    //
    public function previous()
    {
        return view('stuff.priviousrequest');
    }
    public function stuffhome()
    {
        return view('stuff.stuffhome');
    }
}
