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
             
			<td align="center"><b><input class="submit" type="submit" name="przycisk[-1]" value="Dodaj nowego"></b></td>
           
        </tr>

        @foreach($typyserwisu as $serwis)
            <tr>
                <td>{{ $serwis[0] }}</td>
                <td>{{ $serwis[1] }}</td>
                <td>{{ $serwis[2] }} zł</td>
                 
                    <td align="center">
					<input class="submit" type="submit" name="przycisk[{{ (int)$serwis[0] }}]" value="Edytuj">
                        <input class="submit" type="submit" name="przycisk[{{ (int)$serwis[0] }}]" value="Usuń">
                    </td>
                
            </tr>
        @endforeach
    </table>
</form>
 
	 
{{--
Skrypt przedstawiający cennik usług w AutoSerwisie.
Cennik jest przechowywany w bazie danych w postaci tabeli zakorzneionej w formularzu
 --}}

<form method="POST" action="">
    <table border="0">
        <tr>
            <td>nazwa</td>
            <td colspan="2">
                <input type="text" name="nazwa" required value="{{ $nazwa }}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td>cena</td>
            <td colspan="2">
                <input type="number" name="cena" required min="10" value="{{ $cena }}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input class="submit" type="submit" name="przycisk[{{ $numer }}]" value="Zapisz" style="width:200px">
            </td>
        </tr>
    </table>
</form>

 
 
@endsection
