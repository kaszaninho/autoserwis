@extends('main')
@section('content')
    <h2>Dziękujemy za zgłoszenie<br> Skontaktujemy się z Tobą najszybciej jak to możliwe<h2><br> 

    <input class="submit" type="submit" value="Wstecz" onClick="window.location='/kontakt'"><br>
    <br>
    <a href="javascript:void(0)" onclick="history.back()">Powrót</a>
@endsection
