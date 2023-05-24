@extends('main')
@section('content')

    @php
        $email_to = "kbautoserwis@gmail.com";
        $email_subject = "Proba kontaktu z Formularza kontaktowego";
    
        $name = request('Name');
        $email = request('Email');
        $message = request('Message');
    
        $email_message = "Wiadomość.\n\n";
        $email_message .= "Name: " . $name . "\n";
        $email_message .= "Email: " . $email . "\n";
        $email_message .= "Message: " . $message . "\n";
    
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
    
        mail($email_to, $email_subject, $email_message, $headers);
    @endphp

    <h2>Dziękujemy za zgłoszenie<br> Skontaktujemy się z Tobą najszybciej jak to możliwe<h2><br> 

    <input class="submit" type="submit" value="Wstecz" onClick="window.location='/kontakt'"><br>
@endsection
