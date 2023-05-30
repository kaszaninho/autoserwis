@section('content')
@extends('main')	
<div style="display: flex; justify-content: center;">
  <img id="logo" src="{{ asset('images/KBlogo.png')}}" alt="Logo">
</div>
<h2> Stwórz / Edytuj Samochód</h2>
@if ($errors->any())
    		<div style="color: red;">
        		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        		</ul>
    		</div>
		@endif
<form method="POST" action="{{route('updateSamochod',[$samochod->id])}}"> 
    	@csrf
    <table border="0">
        <tr>
            <input type=hidden name='idKlienta' value="{{$samochod->idKlienta}}">
            <td><b>Marka</b></td>
            <td colspan="2">
                <input type="text" name="marka"   value="{{$samochod->marka}}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td><b>Model</b></td>
            <td colspan="2">
                <input type="text" name="model"   value="{{$samochod->model}}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td><b>Rocznik</b></td>
            <td colspan="2">
                <input type="text" name="rocznik"   value="{{$samochod->rocznik}}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td><b>Numer rejestracyjny</b></td>
            <td colspan="2">
                <input type="text" name="nrRejestracyjny"   value="{{$samochod->nrRejestracyjny}}" size="15" style="text-align: left">
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
<a href="{{ route('naprawy') }}">Powrót</a>

</div>
@endsection
