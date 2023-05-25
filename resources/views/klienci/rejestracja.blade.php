<?php

/**
Skrypt do rejestracji użytkownika.
Walidowanie jest od strony:
HTML - każde pole musi być wypełnione
PHP - sprawdzana jest baza danych w celu znalezienia wpisanego loginu
JavaScript - porównywane są maile i hasła zgodnie z wytycznymi.
*/
require_once('funkcje.php');
global $polaczenie;
otworz_polaczenie();
include('header.php');

if(isset($_POST['haslo']))
{
	if(!znajdz_login($_POST['login']))
	{
	  dodaj_klienta_do_bazy($_POST['imie'], $_POST['nazwisko'], $_POST['email'], $_POST['login'], $_POST['haslo']);
	  $_SESSION['komunikat']='Udało Ci się zarejestrować!';
	  header("Location: login.php");
	}
	else
	  echo "Istnieje taki login już w bazie";
}

/**
Funkcja do przeszukania bazy, czy ma ona już wpisany podany login
*/
function znajdz_login($login)
{
	global $polaczenie;
	$rozkaz = "SELECT * FROM KLIENCI WHERE login = '$login';";
	$rekord = mysqli_query($polaczenie,$rozkaz);
	if($rekord->num_rows == 0)
		return false;
	return true;
}
  
?>

	<form method=POST action='' onSubmit='return valid()'>
	<br><br>
	<h2>Rejestracja</h2>
	
		<label>Imię</label>  <input type="text" placeholder=" imię" value='<?=$_POST['imie']??''?>' name='imie' required ><br><br>
		<label>Nazwisko</label> <input type="text" placeholder=" nazwisko" value='<?=$_POST['nazwisko']??''?>' name='nazwisko' required ><br><br>  
		<label>Email</label> <input type="text" placeholder=" email" value='<?=$_POST['email']??''?>' name='email' required ><br><br>  
		<label>Login</label>  <input type="text" placeholder=" login" value='<?=$_POST['login']??''?>' name='login' required ><br><br>
		<label>Hasło</label>  <input type="password" placeholder=" hasło" name='haslo' required ><br><br>
		 Powtórz Hasło   <input type="password" placeholder=" powtórz hasło" name='powtorzhaslo'  required ><br><br>
		<input class ="submit" type="submit" value="Rejestruj">
	
	</form>


			<?php
include('bottom.php');
?>
<script>

/**
Funkcja walidująca rejestrację.
*/
function valid()
{
	if(document.forms[0].haslo.value != document.forms[0].powtorzhaslo.value)
	{
		alert("Hasła się nie zgadzają!");
		return false;
	}
	if((document.forms[0].haslo.value).length <10)
	{
		alert("Hasło jest za krótkie! Co najmniej 11 znaków");
		return false;
	}
	var mail = document.forms[0].email.value;
	var pozycja = mail.search("@");
	if(pozycja == -1)
	{
		alert("Zły format maila - brak @.");
		return false;
	}
	if(pozycja == mail.length-1)
	{
		alert("Zły format maila - @ na ostatnim miejscu(brak domeny).");
		return false;
	}
	return true;
	
}
</script>

		
  