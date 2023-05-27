@section('content')
@extends('main')
		
@php
    $flagaadmin = session('admin', false);
@endphp
<h2>Wybierz klienta</h2>
<form method="GET" action="/samochody">
<select class='drop-down' name='wybrany'>
<option value='noSelection'>Wybierz z listy ...</option>" 
@foreach($klienci as $klient)		
    <option value="{{$klient->id}}">{{$klient->imie}} {{$klient->nazwisko}}</option>";
@endforeach
</select>
<input class ='submit' type=submit value="Pokaż informacje">
</form>
@endsection

