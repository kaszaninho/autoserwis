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
	// public function showAlltwo() {
    //     // $klientId = $request->input('wybrany');
    //     // $klient = Klient::where('id', $klientId)->first();
    //     $klient = Klient::first();
	// 	return view('naprawy.showAlltwo');
	// }
	public function showAllthree() {	
		$serwisy = SerwisSamochodu::all();
		return view('naprawy.showAllthree', ['serwisy'=>$serwisy]);
	}

    
}
