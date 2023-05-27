@section('content')
@extends('main')	 	
<form method="POST" action="{{route('updateSamochod',[$samochod->id])}}"> 
    	@csrf
    <table border="0">
        <tr>
            <input type=hidden name='idKlienta' value="{{$samochod->idKlienta}}">
            <td>Marka</td>
            <td colspan="2">
                <input type="text" name="nazwa" required value="{{$samochod->nazwa}}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td>Model</td>
            <td colspan="2">
                <input type="text" name="model" required value=" {{$samochod->cena}} " size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td>Rocznik</td>
            <td colspan="2">
                <input type="text" name="rocznik" required value=" {{$samochod->cena}} " size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td>Numer rejestracyjny</td>
            <td colspan="2">
                <input type="text" name="nrRejestracyjny" required value=" {{$samochod->cena}} " size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input class="submit" type="submit" value="Zapisz" style="width:200px">
            </td>
        </tr>
    </table>
</form>
</div>
 
 
@endsection
