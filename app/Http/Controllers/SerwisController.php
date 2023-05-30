<?php

namespace App\Http\Controllers;
use App\Models\Klient;
use App\Models\Samochod;
use App\Models\SerwisSamochodu;
use App\Models\TypSerwisu;

use Illuminate\Http\Request;

class SerwisController extends Controller
{
	public function showAll(Request $request) {
                $validatedData = $request->validate([
                        'wybranySamochod' => 'required|not_in:noSelection',
                    ]);
                
        $samochodId = $request->input('wybranySamochod');
        $samochod = Samochod::where('id', $samochodId)->first();
        return view('serwisy.showAll', ['serwisy' => $samochod->serwis, 'samochod' => $samochod]);
	}

        public function newSerwis($samochodId, Request $request) {
                $lista = explode(',',$request->input('lista')) ?? [];
                $serwisId = $request->input('serwis');
                if($serwisId == 0) {
                }
                else {
                        if(!in_array($serwisId, $lista)) {                                
                                $lista[] = $serwisId;                               
                        }
                }
                $sumaSerwisow = TypSerwisu::whereIn('id', $lista)->sum('cena') ?? 0;
                $listaSerwisow = TypSerwisu::whereIn('id', $lista)->get();
                $wszystkieSerwisy = TypSerwisu::all();
                $samochod = Samochod::find($samochodId);
                $lista = implode(',', $lista);
                return view('serwisy.newSerwis', ['listaSerwisow' => $listaSerwisow, 'sumaSerwisow' => $sumaSerwisow, 'samochod' => $samochod, 'wszystkieSerwisy' => $wszystkieSerwisy, 'listaId' => $lista]);
        }
        public function update($samochodId, Request $request)
        {			
                $validated = $request->validate([
			'data' => 'required'
		]);
                $serwis = new SerwisSamochodu;
                $serwis->idSamochodu = $samochodId;
                $serwis->idKlienta = Samochod::find($samochodId)->idKlienta;
                $serwis->cena =  explode(' ', $request->input('cena'))[0];                
                $serwis->DataSerwisu =  $request->input('data');
                $serwis->save();
        
                return redirect('/naprawy');
        }
}
