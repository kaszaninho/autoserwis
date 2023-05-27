<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontaktController extends Controller
{
 
	public function kontakt() {		
		
		return view("kontakt.kontakt");
	}
    public function kontaktWalidacja(Request $request) {		
	 
		$validated = $request->validate([
			'Name' => 'required |max:255|min:2 ',
			'Email' => 'required | email |min:6',
			'Telefon' => 'required|numeric|min:2',
			'Message' => 'required',
		]);
 
		 return view('kontakt.contact');
	} 
     
}