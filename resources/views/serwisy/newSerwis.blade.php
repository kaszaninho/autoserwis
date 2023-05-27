@section('content')
@extends('main')
		

<div>
  <h1>Zgłoś samochód do naprawy:</h1>
	
	<table>
	<form id='form' method="GET" action="{{route('newSerwis', $samochod->id)}}">
        <input type="hidden" name="lista" value="{{$listaId}}"/>
	<tr><td>Wybierz Serwis:</td>
	<td>
	@php
    @endphp
	<select name='serwis' class='drop-down' required>
	<option value='0'>Wybierz z listy ...</option>
	@foreach($wszystkieSerwisy as $serwis)
		<option value='{{$serwis->id}}'>{{$serwis->nazwa}} - {{$serwis->cena}} zł</option>
	@endforeach
	</select>
	</td>
	<td><input type=submit id='wybierz' value="Dodaj usługę do listy">
	</td></tr>
	</form>
	<tr><td>Wybrałeś:</td>
	<td >
	@foreach($listaSerwisow as $serwis)
		{{$serwis->nazwa}} - {{$serwis->cena}} zł <br/>
    @endforeach
    @if(empty($listaSerwisow))
    Brak Serwisów
	@endif
</td>
	</tr>
	<form id='form' method="POST" action="{{route('updateSerwis', $samochod->id)}}" onSubmit="alert('Umówiłeś wizytę!')">
        @csrf
	<tr><td>Cena sumaryczna</td><td><input style="text-align:center" type=text name='cena' required value="{{$sumaSerwisow}} zł" readonly>
	</td>
	</tr>
	<tr><td>Samochód</td>
	<td >
        {{$samochod->marka}} {{$samochod->model}}
	</td></tr>
	<tr><td>Wybierz Datę:</td>
	<td ><input id='date' type=date name='data' pattern="\d{1,2}/\d{1,2}/\d{4}" required></td></tr>
	<tr><td colspan=3 ></td></tr>
	</table>
	<br>
	<input class ="submit" type="submit" value='Zgłoś do naprawy'>
	</form>
	</div>

    @endsection
