<?php

namespace App\Http\Controllers;
use App\Models\Klient;
use App\Models\Samochod;
use App\Models\SerwisSamochodu;

use Illuminate\Http\Request;

class SamochodController extends Controller
{
        public function showAll(Request $request) {
                $klientId = $request->input('wybrany');
                $klient = Klient::where('id', $klientId)->first();
                return view('samochody.showAll', ['samochody' => $klient->samochody, 'klient' => $klient]);
        }
        public function edit($id)
        {
        if($id != -1) $samochod = Samochod::find($id);
        else $samochod = new Samochod(['id'=>-1, 'idKlienta'=> $request->$idklienta, 'marka'=>'', 'model'=>'', 'rocznik' => '', 'nrRejestracyjny' => '']);
    
        return view('samochody.edit', compact('samochod'));  
        }
    
        public function update(Request $request, $id)
        {	
                $validated = $request->validate([
			'marka' => 'required |max:255|min:2 ',
			'model' => 'required | max:255 |min:3',
			'rocznik' => 'required|numeric|min:2',
			'nrRejestracyjny' => 'required',
		]);		
                if($id != -1) $samochod = TypSerwisu::find($id);
                else $samochod = Samochod::firstOrNew(
                                ['idKlienta' => $request->input('idKlienta')]);
                $samochod->marka =  $request->input('marka');
                $samochod->model =  $request->input('model');
                $samochod->rocznik =  $request->input('rocznik');
                $samochod->nrRejestracyjny =  $request->input('nrRejestracyjny');
                
                $samochod->save();
        
                return redirect('/naprawy');
        }
        
        public function destroySamochod($id)
        {		
                $samochod = Samochod::find($id);		        
                $samochod->delete();
        
                return redirect('/naprawy');
        }
}
