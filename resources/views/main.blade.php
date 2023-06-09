<?php
 
 /**
 Skrypt będący początkiem każdej podstrony - zawiera początki nagłówków, górną część strony - menu górne, zdjęcia po bokach, itp.
 */
  
 ?>
 
  <!DOCTYPE html>
 <html>
   <head>
   <meta charset="utf-8"/>
		   <link rel="icon" href="{{ asset('css/fontello/autko.png') }}" sizes="302x192" /><!--ikona w nowym tabie-->
		 <link rel="stylesheet" type="text/css" href="{{ asset('css/start.css') }}"><!--style sheet-->
		 <link href="https://fonts.googleapis.com/css?family=Akronim|Josefin+Sans|Lato|Libre+Barcode+39+Text|Permanent+Marker|Shadows+Into+Light" rel="stylesheet">	<!-- fonty-->
		 <link rel="stylesheet" href="{{ asset('css/fontello/css/gajdi.css') }}" type="text/css" /><!--fajne ikonki/fontki-->
		 <link type="text/javascript" src="js/lightbox-plus-jquery.min.js"/><!--dodatkowy skrypt do wyświetlania galerii-->	
		 <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" />		
		 <meta name ="description" content = "PHP&HMTL&CSS Project"/>
		 <title>Auto Serwis</title>
		 
		 <script src="{{ asset('js/timer.js') }}"></script><!--skrypt z zegarem -->
   </head>
 
   <body onload="odliczanie();"><!--wywołanie Javascript zegara-->
	<div id="container">
	<div class="nav">
    <!-- Menu główne rozwijane -->
    <ol>
        <li><a href="/">Strona główna</a></li>
        <li><a href="/historia">Historia </a></li>
        <li><a href="/galeria">Galeria </a></li>
        <li><a>Naprawy</a>
        <ul>
            <li><a href="/cennik">Cennik</a></li>
			@auth
            <li><a href="/naprawy">Twoja lista</a></li>   
			@endauth
        </ul>
        </li>
        <li><a href="/kontakt">Kontakt</a></li>
		@auth
        <li><a href="/klienci">Klienci</a></li>
        <li><a>{{ Auth::user()->name }}</a>  
		<ul>
		<li><a href="/profile">Profil</a>  </li>	
		<li>
		<form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ __('Wyloguj') }}
                </x-dropdown-link>
        </form>
		</li> 
		</li>
        </ul>
        @endauth

		@guest
        <li><a href="/login" id="login">Logowanie</a>
            <ul>
			<li><a href="/register">Zarejestruj</a></li>
            </ul>
        </li>
        @endguest
    </ol>
</div>
		 <div id="topbar">
		 <div id = "logo">
			 <a href= '/'>
			 <img id ="logogo"  src="{{ asset('images/kg_black.jpg') }}"   >
			 </a>
			 </div>
			 <div id="zegar" width="350">12:00:00</div>
			 
			 <div id = "kod" ><h3>KB-AutoSerwis.pl</h3></div>
			 <div style="clear: both;"></div>
		 </div>	
 
				   
		 <div class="boki">		 
		 <img id ="leftPic" src="{{ asset('images/AUTO_NIEBIESKIE.jpg') }}">
		 </div>
 
 <center>
	 <div id="loginform" >
	  <div id="innerloginform">

	  @yield('content')	

	  <?php
/**
Skrypt dodawany na końcu każdej podstrony - zawierająca elementy jak zdjęcia, zamykanie odpowiednich div'ów, itp.
*/
?>
	</div>
 </div>	
	</center>
<div class="boki">
		<img id ="rightPic" src="{{ asset('images/hotrod.jpg')}}">
		</div>	
		<div id ="footer" >
	 	<img id ="foterpic" src="{{ asset('images/mustangs.jpg')}}" >
		<div class="rectangle">2023 &copy; KB Auto Serwis
		<a  target="_blank" class="sociallink"><i class="icon-tools"></i></a>
		</div>	
</div>
<div class="cookie-container">
      <p>
			Używamy plików cookie na tej stronie, aby zapewnić najlepszą jakość korzystania z naszej
        i wyświetlać trafne reklamy.<br> Aby dowiedzieć się więcej, przeczytaj nasze
        <a href="https://www.gov.pl/web/fundusze-regiony/polityka-prywatnosci-i-wykorzystania-plikow-cookies">polityka prywatności</a><br>  
		Czy zgadzadz się z polityką cookies?<br>
      <br><button class="cookie-btn">
        Okay
      </button>
      <button class="cookie-anuluj" value="Anuluj">
        Anuluj
      </button>
</div>
	<script src="{{ asset('js/cookieBanner.js')}}"></script>
	<script src="{{ asset('js/lightbox-plus-jquery.js')}}"></script>
   </body>
</html>
  

 