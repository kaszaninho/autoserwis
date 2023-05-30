@section('content')
@extends('main')
<div style="display: flex; justify-content: center;">
  <img id="logo" src="{{ asset('images/KBlogo.png')}}" alt="Logo">
</div>
@php
    $flagaadmin = session('admin', false);
@endphp
@php $naglowki=["Lp","Serwis","Cena"]; @endphp 
<h2>Lista Serwisowa - Cennik</h2>

<form method='GET'>
 
    <table border="1" style="text-align:center">
        <tr>
            @foreach($naglowki as $naglowek)
                <td><b>{{ $naglowek }}</b></td>
            @endforeach
 @auth            
			<td align="center"><b><input class="submit" type="submit" value="Dodaj nowego" onClick="action='/cennik/edit/-1'"></b></td>
</form  >  
@endauth        
        </tr>

        @foreach($typyserwisu as $serwis)
            <tr>
			@foreach($serwis->getAttributes() as $p=>$pole)
				@if($p == 'id') <td>{{$pole}}</td>	@endif 
				@if($p == 'nazwa') <td>{{$pole}}</td>	@endif
				@if($p == 'cena') <td>{{$pole}} zł</td>	@endif
			@endforeach	
            @auth
            <form method='GET'>
            <td align="center">

			<input class="submit" type="submit" value="Edytuj" onClick="action='/cennik/edit/{{$serwis->id}}'">
            </form  > 
            <form method='GET'>
            <input class="submit" type="submit" value="Usuń" onClick="action='/cennik/destroy/{{$serwis->id}}'">
   
        </form  > 
            </td>
                
            </tr>
            @endauth
        @endforeach
    </table>
</form>
 
@endsection
