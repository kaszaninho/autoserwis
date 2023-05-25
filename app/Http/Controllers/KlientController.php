<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klient;

class KlientController extends Controller
{
			//dostep do bazy sprawdzenie -> czyli jeszcze jeden endpoint	

	public function showAll( ) {	

		 return view('klienci.showAll'); 
	}
	public function login(Request $request) {		
	 
		$validated = $request->validate([
			'login' => 'required |max:255',
			'haslo' => 'required | min:5',
		]);
 		
		 return view('/');
	} 
	public function register( ) {	
		//dostep do bazy i zapis -> czyli jeszcze jeden endpoint	
		return view('klienci.register'); 
   }
   public function registerWalidacja(Request $request) {		
	
	   $validated = $request->validate([
		'imie' => 'required',
		'nazwisko' => 'required',
		'email' => 'required|email',
		'login' => 'required',
		'haslo' => 'required | password',
		'powtorzhaslo' => 'required',
	   ]);
		
		return view('/');
   } 
}
