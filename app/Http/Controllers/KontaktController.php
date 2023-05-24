<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontaktController extends Controller
{
	public function kontakt() {		
		
		return view("kontakt.kontakt");
	}
    public function contact() {		
		
		return view("kontakt.contact");
	}
}