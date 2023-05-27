@section('content')
@extends('main')
<div style="display: flex; justify-content: center;">
  <img id="logo" src="{{ asset('images/KBlogo.png')}}" alt="Logo">
</div>
<h2> Stwórz / Edytuj Klienta</h2>
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method='POST' action="{{route('klienci.update', $klienci->id)}}"> 
	@csrf
	 @method('PUT')
		<table border=0>
		<tr>
		<td><b>Imię</b></td><td colspan=2>
		<input type=text name='imie' value='{{$klienci->imie}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td><b>Nazwisko</b></td><td colspan=2>
		<input type=text name='nazwisko' value='{{$klienci->nazwisko}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td><b>Email</b></td><td colspan=2>
		<input type=text name='email' value='{{$klienci->adres_email}}' size=15 style='text-align: left'></td>
		</tr>
		<tr>
		<td colspan=3 align='center'>		
		<input type=submit value='Zapisz' style='width:180px' class='submit'></td>
		</tr>
		</table>
		</form>
		<br>
		<a href="javascript:void(0)" onclick="history.back()">Powrót</a>
@endsection
 