<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klient;

class KlientController extends Controller
{
	public function showAll() {		
		
		$klienci = Klient::all();
		return view('klienci.showAll', ['klienci'=>$klienci]);
	}
 
}
