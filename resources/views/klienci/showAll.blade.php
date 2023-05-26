@section('content')
@extends('main')

		@php $naglowki = array("Imię", "Nazwisko", "Email"); @endphp			 		
		<form method="POST"  > 
		<h2>Klienci</h2>
		<table border = 1>
			<tr>
		@foreach($naglowki as $naglowek) 
		<td><b>{{$naglowek}}</b></td>
		@endforeach
 
		<td align='center'><b>
		   <input type='submit' class ="submit" onClick="action='/klienci/edit/-1'"
				  value='Dodaj nowego'></b>
				</td>	
	</tr>
	@foreach($klienci as $klient)		
	<tr>
		@foreach($klient->getAttributes() as $p=>$pole)
			@if($p != 'id' && $p != 'created_at' && $p != 'updated_at') <td>{{$pole}}</td>	@endif 
		@endforeach	
		<td align='center'>
			<input type='submit' value='Edytuj' class ="submit" onClick="action='/klienci/edit/{{$klient->id}}'">
			<input type='submit' value='Usun' class ="submit" onClick="action='/klienci/destroy/{{$klient->id}}'">
		</td>	
	</tr>		
	@endforeach
	
	</table>
	</form>
 
@endsection