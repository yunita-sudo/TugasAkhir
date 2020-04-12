<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDesa extends Controller
{
    public function menampilkandatadesa()
    {
        return view ('Desa.viewdesa');
    }
}
