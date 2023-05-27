@section('content')
@extends('main')
						 		
 
@php
    $naglowki = array("Numer", "Data Wykonania", "Cena");
    @endphp


    <br><b>Historia serwisów samochodu {{$samochod->marka}} {{$samochod->model}} <br>o numerze rejestracyjnym {{$samochod->nrRejestracyjny}}</b><br>
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
    </form>

    @endsection
