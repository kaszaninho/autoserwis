@section('content')
@extends('main')
						 		
		<form method="GET" action="{{route('login')}}"> 
		<h2>Logowanie</h2>
			@if ($errors->any())
    			<div class="alert alert-danger">
        			<ul>
            			@foreach ($errors->all() as $error)
                			<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    			</div>
			@endif
			<label>Login</label>  <input type="text" placeholder=" login" name="login" ><br><br>
			<label>Hasło</label>  <input type="password" placeholder=" hasło" name="haslo"  ><br><br>
			<input class ="submit" type="submit" value="Zaloguj">

		</form>
		<div>
		<p>Nie jesteś jeszcze zarejestrowany?<br>
		Zarejestuj się
		<a id="rejestracja" href="/rejestracja ">Rejestracja</a>
		</div>
		
 
  
@endsection
