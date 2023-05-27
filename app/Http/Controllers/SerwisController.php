<?php

namespace App\Http\Controllers;
use App\Models\Klient;
use App\Models\Samochod;
use App\Models\SerwisSamochodu;

use Illuminate\Http\Request;

class SerwisController extends Controller
{
	public function showAll(Request $request) {
        $samochodId = $request->input('wybranySamochod');
        $samochod = Samochod::where('id', $samochodId)->first();
        return view('serwisy.showAll', ['serwisy' => $samochod->serwis, 'samochod' => $samochod]);
	}
}
