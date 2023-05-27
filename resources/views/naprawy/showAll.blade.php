@section('content')
@extends('main')
		
@php
    $flagaadmin = session('admin', false);
@endphp
<div style="display: flex; justify-content: center;">
  <img id="logo" src="{{ asset('images/KBlogo.png')}}" alt="Logo">
</div>
 
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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

