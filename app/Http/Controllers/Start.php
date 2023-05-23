<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Start extends Controller
{
	public function __invoke() {		
		
		return view("main");
	}
}