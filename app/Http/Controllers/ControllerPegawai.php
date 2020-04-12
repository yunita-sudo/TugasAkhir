<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPegawai extends Controller
{
    public function menampilkandatapegawai()
    {
        return view ('Pegawai.viewpegawai');
    }
}
