@section('content')
@extends('main')					 		
 
@php
    $naglowki = array("Numer", "Marka", "Model", "Nr Rej");  
    $wybranySamochod = 'noSelection';  
@endphp

@if($samochody->count() == 0)
    Brak samochodów dla tego klienta!
@else
<form method='GET'>
    <br><b>Samochody klienta {{$klient->imie}} {{$klient->nazwisko}}</b><br>
    <input type=hidden name='idklienta' value="{{$klient->id}}">
    <table border = 1><tr>
    @foreach($naglowki as $naglowek) <td><b>{{$naglowek}}</b></td> @endforeach
    <td align='center'><b><input class="submit" type="submit" value="Dodaj nowego" onClick="action='/samochody/edit/-1'"></b></td>
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
            @endforeach	
            <td ><input type='submit' value='Edytuj' onClick="action='/samochody/edit/{{$samochod->id}}'">
                        <input type='submit' value='Usun' onClick="action='/samochody/edit/{{$samochod->id}}'"></td>	
        </tr>	
    
    @endforeach
    </table>
</form>
    <h2>Wybierz samochód</h2>
    <form method="POST" action="/serwisy">
    @csrf
    <select class='drop-down' name='wybranySamochod'>
    @if($wybranySamochod == 'noSelection')
        <option value='noSelection'>Wybierz z listy ...</option>"
    @endif  
    @foreach($samochody as $samochod)		
            <option value="{{$samochod->id}}" {{ $wybranySamochod == $samochod ? 'selected' : '' }}>{{$samochod->marka}} {{$samochod->model}}</option>";    
    @endforeach
    </select>
    <input class ='submit' type=submit value="Pokaż Historię" id="wybierz">
</form>
@endif
@endsection