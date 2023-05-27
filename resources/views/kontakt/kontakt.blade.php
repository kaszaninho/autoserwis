@section('content')
@extends('main')
						 		
<p>Masz jakieś pytania? / Potrzebujesz pomocy?<br>
		Zadaj nam jakieś pytanie skontakujemy się z Tobą najszybciej jak będziemy mogli.<br>
		<h2>Formularz Kontaktowy</h2>
		@if ($errors->any())
    		<div style="color: red;">
        		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        		</ul>
    		</div>
		@endif
		<form class ="form" method=GET action="{{route('kontaktWalidacja')}}"> 
		@csrf
			 
			 <b>Imię i Nazwisko  
			<input type="text" name="Name" placeholder="imie i nazwisko"  ><br><br>
			<label><b>Email</label>  
			<input type="email" name="Email" placeholder="email"   ><br><br>
			<label><b>Telefon</b></label>  
			<input type="text" name='Telefon' placeholder="Telefon"   ><br>
			<span id='tel_info'>* Telefon powinien skadać się przynajmniej z 6 cyfr</span><br><br>
			<label><b>Wiadomość</label> <br> 
			<textarea type="text"id='textField 'name="Message" placeholder="Tutaj wpisz treść" pattern="[A-Z a-z-*/+0-9]{6,}"   ></textarea><br> <br>
			<input class ="submit" type="submit" value="Wyślij Wiadomość" >
			 
		</form>
 
				<b><p>Lokalizacja Serwisu  
 <div>
 <p id ="kontakt_details" >KB Auto Serwis<br>
 Górki Zawadzkie 108E<br> Nowy Sącz 33-300<br>
 NIP:79 36 78 089<br>
 Godziny Otwarcia:<br>
 Poniedziałek-Piątek<br>
 8:00 - 17:00
 </div>
	        <iframe id ="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1115.2281315246769!2d20.72855208108695!3d49.568378484217384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473de4687ac3f5df%3A0x543364f175abdb41!2sG%C3%B3rki+Zawadzkie+108%2C+Nowy+S%C4%85cz%2C+Polska!5e1!3m2!1spl!2sie!4v1517331973777"  allowfullscreen></iframe>
  	
</div>
@endsection
