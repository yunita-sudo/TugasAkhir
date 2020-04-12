<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function menampilkanhome()
    {
        return view ('Home.viewhome');
    }
}
