@section('content')
@extends('main')
<form method=GET action="{{route('register')}}"> 
	<br><br>
	<h2>Rejestracja</h2>
            @if ($errors->any())
    			<div class="alert alert-danger">
        			<ul>
            			@foreach ($errors->all() as $error)
                			<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    			</div>
			@endif
		<label>Imię</label>  <input type="text" placeholder=" imię"   name='imie'  ><br><br>
		<label>Nazwisko</label> <input type="text" placeholder=" nazwisko"   name='nazwisko'  ><br><br>  
		<label>Email</label> <input type="text" placeholder=" email"   name='email'  ><br><br>  
		<label>Login</label>  <input type="text" placeholder=" login"   name='login'  ><br><br>
		<label>Hasło</label>  <input type="password" placeholder=" hasło" name='haslo'  ><br><br>
		 Powtórz Hasło   <input type="password" placeholder=" powtórz hasło" name='powtorzhaslo'   ><br><br>
		<input class ="submit" type="submit" value="Rejestruj">
	
	</form>
    @endsection