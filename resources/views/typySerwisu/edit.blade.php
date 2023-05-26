 
 
 
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
		   <div class="nav"><!--menu główne rozwijane-->
			 <ol>
				 
				 <li><a href="/autor">Autor</a></li>
				 <li><a href="/">Strona główna</a></li>
				 <li><a href="/historia">Historia </a></li>
				 <li><a href="/galeria">Galeria </a></li>
				 <li><a>Naprawy</a>
				 <ul>
					 <li><a href="/cennik">Cennik</a></li>
					 <li><a href="/naprawy">Twoja lista</a></li>
			 <?php
			 if(!isset($_SESSION['admin'])){ ?>
					 <li><a href="/zglos">Zgłoś</a></li>
					 <?php } ?>
					 </ul>
					 </li>
			 <?php
			 if(!isset($_SESSION['admin'])){ ?>
					 <li><a href="/kontakt">Kontakt</a></li>
					 <?php 
			 }
 
			 
			 if(isset($_SESSION['imie'])){ ?>
					 <li><a href="/profil" id='login'>
					 <?php echo "Witaj ".$_SESSION['imie'];
			 }
			 else {?>		
					 <li><a href="/login" id='login'>
					 <?php echo "Logowanie";
					 $_SESSION['flaga'] = false; // zmienna odpowiedzialna za informacje o tym czy jest ktos zalogowany
			 } 
			 
			 if(!isset($_SESSION['login'])){ ?>
					 <ul><li><a href="/register">Zarejestruj</a></li>
			 <?php 
			 }						
			 else{ ?>
					 <ul><li><a href="/wyloguj" onClick="alert('Zostales wylogowany')">Wyloguj</a></li>
			 <?php } ?>
 
					 </ul>
				 </li>
			 </ol>
		 </div>
 
	  @yield('content')	

			

 		
 
<form method="POST" action="{{route('updateCennik', $typySerwisu->id)}}"> 
    	@csrf
    <table border="0">
        <tr>
            <td>nazwa</td>
            <td colspan="2">
                <input type="text" name="nazwa" required value="{{$typySerwisu->nazwa}}" size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td>cena</td>
            <td colspan="2">
                <input type="number" name="cena" required min="10" value=" {{$typySerwisu->cena}} " size="15" style="text-align: left">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input class="submit" type="submit" value="Zapisz" style="width:200px">
            </td>
        </tr>
    </table>
</form>

 
 
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
   
