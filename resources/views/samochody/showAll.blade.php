@section('content')
@extends('main')					 		
<div style="display: flex; justify-content: center;">
  <img id="logo" src="{{ asset('images/KBlogo.png')}}" alt="Logo">
</div>
<h2> Pojazdy</h2>
 
@php
    $naglowki = array("Numer", "Marka", "Model", "Nr Rej");  
    $wybranySamochod = 'noSelection';  
@endphp

@if($samochody->count() == 0)
<b><p style="color: red;">Brak samochodów dla tego klienta!</p></b>
<form method='POST' action='/samochody/edit/-1'>
@csrf
<input type=hidden name='idklienta' value="{{$klient->id}}">
<b><input class="submit" type="submit" value="Dodaj Pojazd"  ></b><br>
<a href="{{ route('naprawy') }}">Powrót</a>
</form>
@else
    <form method='POST'>
    @csrf
    <br><b>Samochody klienta {{$klient->imie}} {{$klient->nazwisko}}</b><br>
    <input type=hidden name='idklienta' value="{{$klient->id}}">
    <table border = 1><tr>
    @foreach($naglowki as $naglowek) <td><b>{{$naglowek}}</b></td> @endforeach
    <td align='center'><b><input class="submit" type="submit" value="Dodaj Pojazd" onClick="action='/samochody/edit/-1'"></b></td>
    </tr>
    @foreach($samochody as $samochod)
            <tr>
            @foreach($samochod->getAttributes() as $p=>$pole)
                
                    @switch($p)
                        @case('id')
                            <td>{{$pole}}</td> 
                            @break
                        @case('marka')
                            <td>{{$pole}}</td> 
                            @break
                        @case('model')
                            <td>{{$pole}}</td> 
                            @break
                        @case('nrRejestracyjny')
                            <td>{{$pole}}</td> 
                            @break
                    @endswitch     
                    </form>       
            @endforeach	
            <td >
            <form method='GET'>  
            @csrf  
            <input type='submit' class ="submit" value='Edytuj' onClick="action='/samochody/edit/{{$samochod->id}}'">
            </form>
            <form method='GET'>            
            <input type='submit' class ="submit" value='Usun' onClick="action='/samochody/destroy/{{$samochod->id}}'"></td>	
            </form>    
            </tr>	
    
    @endforeach
    </table>

    <h2>Wybierz samochód</h2>
    <form method="GET" action="/serwisy">
    <select class='drop-down' name='wybranySamochod'>
    @if($wybranySamochod == 'noSelection')
        <option value='noSelection'>Wybierz z listy ...</option>"
    @endif  
    @foreach($samochody as $samochod)		
            <option value="{{$samochod->id}}">{{$samochod->marka}} {{$samochod->model}}</option>";    
    @endforeach
    </select>
    <input class ='submit' type=submit value="Pokaż Historię" id="wybierz">
</form>
@endif
@endsection