<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klient;

class KlientController extends Controller
{
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$klienci = Klient::all();		
        return view('klienci.showAll', ['klienci'=>$klienci]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return $this->edit(new Klient(['id'=>-1, 'imie'=>'', 'nazwisko'=>'', 'adres_email'=>'']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		return $this->update($request, 
						new Klient(['id'=>-1, 'imie'=>'', 'nazwisko'=>'', 'adres_email'=>'']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klient  $klienci
     * @return \Illuminate\Http\Response
     */
    public function show(Klient $klienci)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klient  $klienci
     * @return \Illuminate\Http\Response
     */
    public function edit(Klient $klienci)
    {
        //
         return view('klienci.edit', ['klienci'=>$klienci]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klient  $klienci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klient $klienci)
    {
        //
 
        $klienci->imie =  $request->input('imie');
        $klienci->nazwisko = $request->input('nazwisko');
		$klienci->adres_email = $request->input('adres_email');
        $klienci->save();

        return redirect('/klienci');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klient  $klienci
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klient $klienci)
    {
		$klienci->delete();
		return redirect('/klienci');
    }
 
public function filter(Request $request)
{
    $filter = $request->query('filter');

    // Pobierz wszystkich klientów
    $klienci = Klient::all();

    // Jeśli przekazano wartość filtra, wykonaj filtrowanie
    if ($filter) {
        $klienci = $klienci->filter(function ($klient) use ($filter) {
            return stripos($klient->imie, $filter) !== false || stripos($klient->nazwisko, $filter) !== false;
        });
    }

    return view('klienci.showAll')->with('klienci', $klienci);
}

}