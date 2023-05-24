@section('content')
@extends('main')
						 		
 

$email_to = "kbautoserwis@gmail.com"; 
$email_subject = "Proba kontaktu z Formularza kontaktowego";
 $name = $_POST['Name']; 
 $email = $_POST['Email']; 
 $message = $_POST['Message']; 
 $error_message = "";
 //jak ma wyglądać email
 

$email_message = "Wiadomość.\n\n";
//czyszczenie błędów
function clean_string($string) 
{
	$bad = array("content-type", "bcc:", "to:", "cc:", "href");
	return str_replace($bad, "", $string); 
}
//treść wysyłanej wiadomości
 $email_message .= "Name: " . clean_string($name) . "\n"; $email_message .= "Email: " . clean_string($email) . "\n"; $email_message .= "Message: " . clean_string($message) . "\n";
//pola wysyłanej wiadomości
 $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion(); 

 @mail($email_to, $email_subject, $email_message, $headers); 
 ?>
 
 <h2>Dziękujemy za zgłoszenie<br> Skontaktujemy się z Tobą najszybciej jak to możliwe<h2><br> 
 
 	<input class ="submit" type=submit value='Wstecz' onClick="window.location='/kontakt'"><br>
@endsection
  