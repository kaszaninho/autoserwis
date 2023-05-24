<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypSerwisu;

class TypSerwisuController extends Controller
{
	public function showAll() {		
		
		$typyserwisu = TypSerwisu::all();
		return view('typySerwisu.showAll', ['typyserwisu'=>$typyserwisu]);
	}

	public function edit($id)
	{
		if($id != -1) $typySerwisu = TypSerwisu::find($id);
		else $typySerwisu = new TypSerwisu(['id'=>-1, 'nazwa'=>'', 'cena'=>'']);

        return view('typySerwisu.edit', ['typySerwisu'=>$typySerwisu]);  
	}

	public function update(Request $request, $id)
	{			
        if($id != -1) $typySerwisu = TypSerwisu::find($id);
		else $typySerwisu = new TypSerwisu();
        $typySerwisu->nazwa =  $request->input('nazwa');
        $typySerwisu->cena = $request->input('cena');
        
        $typySerwisu->save();

        return redirect('/cennik');
	}

	public function TypSerwisu($id)
	{		
		$typySerwisu = TypSerwisu::find($id);		        
        $typySerwisu->delete();

        return redirect('/cennik');
	}


}
