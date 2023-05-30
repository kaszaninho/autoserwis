<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klient;
use App\Models\Samochod;
use App\Models\SerwisSamochodu;

class NaprawyController extends Controller
{    
	public function showAll() {				
		$klienci = Klient::all();
		return view('naprawy.showAll', ['klienci'=>$klienci]);
	}
}
