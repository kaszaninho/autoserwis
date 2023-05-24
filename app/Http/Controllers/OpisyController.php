<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpisyController extends Controller
{
    public function galeria(){
        return view('galeria');
    }
    public function historia(){
        return view('historia');
    }
}
