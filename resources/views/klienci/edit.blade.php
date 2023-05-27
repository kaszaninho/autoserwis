@section('content')
@extends('main')
<form method='POST' action="{{route('klienci.update', $klienci->id)}}"> 
	@csrf
 
		<table border=0>
		<tr>
		<td>Imię</td><td colspan=2>
		<input type=text name='imie' value='{{$klienci->imie}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td>Nazwisko</td><td colspan=2>
		<input type=text name='nazwisko' value='{{$klienci->nazwisko}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td>Email</td><td colspan=2>
		<input type=text name='email' value='{{$klienci->email}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td colspan=3 align='center'>		
		<input type=submit value='Zapisz' style='width:180px'></td>
		</tr>
		</table></form>
 
@endsection
 