@section('content')
@extends('main')
<div style="display: flex; justify-content: center;">
  <img id="logo" src="{{ asset('images/KBlogo.png')}}" alt="Logo">
</div>						 		
 
@php
    $naglowki = array("Numer", "Data Wykonania", "Cena");
    @endphp
    <br>
    <h2><b>Historia serwisów<br></h2>
     Samochód {{$samochod->marka}} {{$samochod->model}} <br>Rejestracja {{$samochod->nrRejestracyjny}}</b><br><br>
    <table border = 1><tr>
    @foreach($naglowki as $naglowek) <td><b>{{$naglowek}}</b></td> @endforeach
    </tr>
    @foreach($serwisy as $serwis)
            <tr>
            @foreach($serwis->getAttributes() as $p=>$pole)            
                    @switch($p)
                        @case('id')
                            <td>{{$pole}}</td> 
                            @break
                        @case('dataSerwisu')
                            <td>{{$pole}}</td> 
                            @break
                        @case('cena')
                            <td>{{$pole}} zł</td> 
                            @break
                    @endswitch            
            @endforeach	
            </tr>	            
    @endforeach
    </table>

<br/>
<form method="GET" action="{{route('newSerwis', $samochod->id)}}">
    <input class = "submit" type=submit value='Zgłoś nowy serwis'/>
</form>


    <br>
<a href="javascript:void(0)" onclick="history.back()">Powrót</a>

    @endsection
