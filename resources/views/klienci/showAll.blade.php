@section('content')
@extends('main')
						 		
 
		<h2>Logowanie</h2>
			<label>Login</label>  <input type="text" placeholder=" login" name="login" required><br><br>
			<label>Hasło</label>  <input type="password" placeholder=" hasło" name="haslo"  required><br><br>
			<input class ="submit" type="submit" value="Zaloguj">
		</form>
		<div>
		<p>Nie jesteś jeszcze zarejestrowany?<br>
		Zarejestuj się
		<a id="rejestracja" href="/rejestracja ">Rejestracja</a>
		</div>
 
  
@endsection
