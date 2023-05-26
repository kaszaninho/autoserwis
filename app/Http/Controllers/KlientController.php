<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klient;

class KlientController extends Controller
{
			 
	public function showAll( ) {	
		$klient = Klient::all();
		 return view('klienci.showAll', ['klienci'=>$klient]);
	}
	public function edit($id)
	{
		if($id != -1) $klient = Klient::find($id);
		else $klient = new Klient(['id'=>-1, 'imie'=>'', 'nazwisko'=>'', 'email' =>'']);

        return view('klienci.edit', ['klient'=>$klient]);  
	}
	public function update(Request $request, $id)
	{		
		
        if($id != -1) $klient = Klient::find($id);
		else $klient = new Klient();
        $klient->imie =  $request->input('imie');
        $klient->nazwisko = $request->input('nazwisko');
		$klient->email = $request->input('email'); 
        $klient->save();

        return redirect('/klienci');
	}
	public function destroy($id)
	{		
		$klient = Klient::find($id);		        
        $klient->delete();

        return redirect('/klienci');
	}
}