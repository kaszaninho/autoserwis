@section('content')
    @extends('main')
    <div style="display: flex; justify-content: center;">
  <img id="logo" src="{{ asset('images/KBlogo.png')}}" alt="Logo">
</div>
    <h2>Klienci</h2>
    @php $naglowki = array("Imię", "Nazwisko", "Email"); @endphp
    <form action="/klienci " method="GET">
 		<label for="filter">Filtruj:</label>
                    <input type="text" name="filter" id="filter" placeholder="Imię lub nazwisko">
                    <button class="submit" type="submit">Filtruj</button>
    </form> 
		<br> <br> 
        <form method='GET'>
        <table border="1">
            <tr>
                @foreach($naglowki as $naglowek)
                    <td><b>{{$naglowek}}</b></td>
                @endforeach

                <td align='center'><b>
                        <input type='submit' class="submit" onClick="action='/klienci/create'"
                               value='Dodaj nowego'></b>
                    </td>
            </tr>
        </form>

            @foreach($klienci as $klient)
                <tr>
                    @foreach($klient->getAttributes() as $p => $pole)
                        @if($p != 'id' && $p != 'created_at' && $p != 'updated_at')
                            <td>{{$pole}}</td>
                        @endif
                    @endforeach
                    <form method='GET'>
                    <td align='center'>
                        <input type='submit' value='Edytuj' class="submit"
                               onClick="action='/klienci/{{$klient->id}}/edit'">
                               </form>
                    <form method='POST' action=" klienci/{{$klient->id}}">
                    @method('DELETE')
                    @csrf
                    <input type='submit' value='Usun' class="submit">        
                    </form>
                    </td>
                </tr>
            @endforeach

        </table>
    

@endsection
