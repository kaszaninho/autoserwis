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
		return $this->edit(null);
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
		return $this->update($request, -1);
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
    public function edit($idKlienta)
    {
         return view('klienci.edit', ['klient'=>Klient::firstOrNew(['id' => $idKlienta])]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klient  $klienci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
			'imie' => 'required | max:255 |min:2 ',
			'nazwisko' => 'required |min:2',
            'adres_email' => 'required | email ',
		]);
        if ($id == -1) $klient = new Klient();
        else $klient = Klient::firstOrNew(['id' => $id]);
        $klient->imie =  $request->input('imie');
        $klient->nazwisko = $request->input('nazwisko');
		$klient->adres_email = $request->input('adres_email');
        $klient->save();

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