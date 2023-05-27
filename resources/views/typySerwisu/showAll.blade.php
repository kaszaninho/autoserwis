@section('content')
@extends('main')

@php
    $flagaadmin = session('admin', false);
@endphp
@php $naglowki=["Lp","serwis","cena"]; @endphp 
<h2>Lista Serwisowa - Cennik</h2>

<form method='GET'>
 
    <table border="1" style="text-align:center">
        <tr>
            @foreach($naglowki as $naglowek)
                <td><b>{{ $naglowek }}</b></td>
            @endforeach
             
			<td align="center"><b><input class="submit" type="submit" value="Dodaj nowego" onClick="action='/cennik/edit/-1'"></b></td>
</form  >          
        </tr>

        @foreach($typyserwisu as $serwis)
            <tr>
			@foreach($serwis->getAttributes() as $p=>$pole)
				@if($p == 'id') <td>{{$pole}}</td>	@endif 
				@if($p == 'nazwa') <td>{{$pole}}</td>	@endif
				@if($p == 'cena') <td>{{$pole}} zł</td>	@endif
			@endforeach	
            <form method='GET'>
            <td align="center">
			<input class="submit" type="submit" value="Edytuj" onClick="action='/cennik/edit/{{$serwis->id}}'">
            </form  > 
            <form method='GET'>
            <input class="submit" type="submit" value="Usuń" onClick="action='/cennik/destroy/{{$serwis->id}}'">
            </form  > 
            </td>
                
            </tr>
        @endforeach
    </table>
</form>
 
@endsection
