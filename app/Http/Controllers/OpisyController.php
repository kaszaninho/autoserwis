<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpisyController extends Controller
{
    public function galeria(){
        return view('opisowe.galeria');
    }
    public function historia(){
        return view('opisowe.historia');
    }
}
