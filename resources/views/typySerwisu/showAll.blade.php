@section('content')
@extends('main')
						 		
 
@php
    $flagaadmin = session('admin', false);
@endphp
@php $naglowki=["Lp","serwis","cena"]; @endphp 
<h2>Lista Serwisowa - Cennik</h2>

<form method='POST'>
    <table border="1" style="text-align:center">
        <tr>
            @foreach($naglowki as $naglowek)
                <td><b>{{ $naglowek }}</b></td>
            @endforeach
             
			<td align="center"><b><input class="submit" type="submit" value="Dodaj nowego" onClick="action='/cennik/edit/-1'"></b></td>
           
        </tr>

        @foreach($typyserwisu as $serwis)
            <tr>
			@foreach($serwis->getAttributes() as $p=>$pole)
				@if($p == 'id') <td>{{$pole}}</td>	@endif 
				@if($p == 'nazwa') <td>{{$pole}}</td>	@endif
				@if($p == 'cena') <td>{{$pole}}</td>	@endif
				@endforeach	
                 
                    <td align="center">
					<input class="submit" type="submit" value="Edytuj" onClick="action='/cennik/edit/{{$serwis->id}}'">
                    <input class="submit" type="submit" value="Usuń" onClick="action='/cennik/destroy/{{$serwis->id}}'">
                    </td>
                
            </tr>
        @endforeach
    </table>
</form>
 
@endsection
