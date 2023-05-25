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
			'Name' => 'required |max:255',
			'Email' => 'required | email',
			'Telefon' => 'required|numeric|max:255',
			'Message' => 'required',
		]);
 
		 return view('kontakt.contact');
	} 
    public function sendEmail( )
    {
        
    return view("kontakt.contact");
    }
     
}