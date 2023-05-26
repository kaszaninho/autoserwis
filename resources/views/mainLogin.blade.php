 
 
  <!DOCTYPE html>
 <html>
   <head>
   <meta charset="utf-8"/>
		   <link rel="icon" href="css/fontello/autko.png" sizes="302x192" /><!--ikona w nowym tabie-->
		 <link rel="stylesheet" type="text/css" href="css/startLogin.css"><!--style sheet-->
		 <link href="https://fonts.googleapis.com/css?family=Akronim|Josefin+Sans|Lato|Libre+Barcode+39+Text|Permanent+Marker|Shadows+Into+Light" rel="stylesheet">	<!-- fonty-->
		 <link rel="stylesheet" href="css/fontello/css/gajdi.css" type="text/css" /><!--fajne ikonki/fontki-->
		 <link type="text/javascript" src="js/lightbox-plus-jquery.min.js"/><!--dodatkowy skrypt do wyświetlania galerii-->	
		 <link href="css/lightbox.min.css" rel="stylesheet" />		
		 <meta name ="description" content = "PHP&HMTL&CSS Project"/>
		 <title>Auto Serwis</title>
		 
		 <script src="js/timer.js"></script><!--skrypt z zegarem -->
   </head>
   <body>
 
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
                <li><a href="/naprawy">Twoja lista</a></li>
 
                <li><a href="/zglos">Zgłoś</a></li>
 
            </ul>
        </li>
        <li><a href="/kontakt">Kontakt</a></li>
        @auth
        <li><a href="/klienci">Dodaj Klienta</a>  </li>

        <li><a>{{ Auth::user()->name }}</a>  
		    <ul>
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
        @endguest


    </ol>
</div>

 
	  @yield('content')	

			 </center>
 
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
	<script src="js/cookieBanner.js"></script>
	<script src="js/lightbox-plus-jquery.js"></script>
   </body>
</html>
  

 