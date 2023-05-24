@section('content')
@extends('main')
						 		
 
<form method="POST"action="{{route('updateCennik', $typyserwisu->id)}}"> 
    	@csrf
    <table border="0">
        <tr>
            <td>nazwa</td>
            <td colspan="2">
                <input type="text" name="nazwa" required value="{{$typyserwisu->nazwa}}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td>cena</td>
            <td colspan="2">
                <input type="number" name="cena" required min="10" value=" {{$typyserwisu->cena}} " size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input class="submit" type="submit" value="Zapisz" style="width:200px">
            </td>
        </tr>
    </table>
</form>

 
 
@endsection
