<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klient;

class KlientController extends Controller
{
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
}
