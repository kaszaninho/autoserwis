 
@extends('main')
@section('content') 	
 
<div style="display: flex; justify-content: center;">
  <img id="logo" src="{{ asset('images/KBlogo.png')}}" alt="Logo">
</div>
 <h2> Stwórz / Edytuj Cenę</h2>
 @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('updateCennik', $typyserwisu->id)}}"> 
    	@csrf
    <table border="0">
        <tr>
            <td><b>Serwis</b></td>
            <td colspan="2">
                <input type="text" name="nazwa"   value="{{$typyserwisu->nazwa}}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td><b>Cena</b></td>
            <td colspan="2">
                <input type="number" name="cena"  value=" {{$typyserwisu->cena}} " size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input class="submit" type="submit" value="Zapisz" style="width:200px">
            </td>
        </tr>
    </table>
</form>
<br>
<a href="{{ url('/cennik') }}">Powrót</a>
 
@endsection
