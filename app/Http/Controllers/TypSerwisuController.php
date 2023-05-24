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
		if($id != -1) $student = Student::find($id);
		else $student = new Student(['id'=>-1, 'imie'=>'', 'nazwisko'=>'']);

        return view('students.edit', ['student'=>$student]);  
	}

	public function update(Request $request, $id)
	{			
        if($id != -1) $student = Student::find($id);
		else $student = new Student();
        $student->imie =  $request->input('imie');
        $student->nazwisko = $request->input('nazwisko');
        
        $student->save();

        return redirect('/students');
	}

	public function destroy($id)
	{		
		$student = Student::find($id);		        
        $student->delete();

        return redirect('/students');
	}


}
