@section('content')
@extends('main')
<form method='POST' action="{{route('updateKlient', $klient->id)}}"> 
	@csrf
 
		<table border=0>
		<tr>
		<td>Imię</td><td colspan=2>
		<input type=text name='imie' value='{{$klient->imie}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td>Nazwisko</td><td colspan=2>
		<input type=text name='nazwisko' value='{{$klient->nazwisko}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td>Email</td><td colspan=2>
		<input type=text name='email' value='{{$klient->email}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td colspan=3 align='center'>		
		<input type=submit value='Zapisz' style='width:180px'></td>
		</tr>
		</table></form>
		
@endsection