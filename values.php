<?php
if(isset($_POST['imie'])) {
    $imie = $_POST['imie'];
    echo 'Imie :'.$imie."<br>\n";
}
if(isset($_POST['nazwisko'])) {
    $nazwisko = $_POST['nazwisko'];
    echo 'Imie :'.$nazwisko."<br>\n";
}
if(isset($_POST['radio1'])) {
    $gender = $_POST['radio1'];
    echo 'Płeć :'.$gender."<br>\n";
}
if(isset($_POST['password'])) {
    $password = $_POST['password'];
    echo 'Hasło :'.$password."<br>\n";
}
if(isset($_POST['nazwa'])) {
    $textField = $_POST['nazwa'];
    echo 'Tekst :'.$textField."<br>\n";
}
if(isset($_POST['checkbox'])) {
    $agree = 'Zgadzam się z warunkami umowy';
    echo 'Zgadzam się z warunkami umowy'."<br>\n";
} else {
    $agree = 'Mam was wszystkich w DUPIE !!!';
    echo 'Mam was wszystkich w DUPIE !!!'."<br>\n";
}
require '/usr/share/php/libphp-phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
$mail->From = "testpuw@op.pl";    //adres e-mail użyty do wysyłania wiadomości
$mail->FromName = "Damian,Arek,Andrzej";    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
$mail->AddReplyTo('testpuw@op.pl', 'mailing'); //adres e-mail nadawcy oraz jego nazwa
//w polu "Odpowiedz do"
$mail->Host = "smtp.poczta.onet.pl";    //adres serwera SMTP wysyłającego e-mail
$mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
$mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
$mail->Username = "testpuw@op.pl";    //nazwa użytkownika do skrzynki e-mail
$mail->Password = "Damian911.";    //hasło użytkownika do skrzynki e-mail
$mail->Port = 587; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
$mail->Subject = "Test";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
$mail->Body = 'Imię :'.$imie."<br>\n"; 'Nazwisko :'.$nazwisko."<br>\n";'Płeć :'.$gender."<br>\n";'Hasło :'.$password."<br>\n";'Tekst :'.$textField."<br>\n";'Zgoda :'.$agree;    //Treść wiadomości, można stosować zmienne i znaczniki HTML

$mail->AddAddress ("alltim2001@vp.pl","Andzrzej");    //adres skrzynki e-mail oraz nazwa
//adresata, do którego trafi wiadomość
if($mail->Send())    //sprawdzenie wysłania, jeśli wiadomość została pomyślnie wysłana
{
    echo 'E-mail został wysłany'; //wyświetl ten komunikat
}
else    //w przeciwnym wypadku
{
    echo 'E-mail nie mógł zostać wysłany';    //wyświetl następujący
}
?>



