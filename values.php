<?php
if(isset($_POST['imie'])) {
    $imie = $_POST['imie'];
    echo 'Imie :'.$imie."<br>\n";
}
if(isset($_POST['nazwisko'])) {
    $imie = $_POST['nazwisko'];
    echo 'Imie :'.$imie."<br>\n";
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
    $password = $_POST['checkbox'];
    echo 'Zgadzam się z warunkami umowy'."<br>\n";
} else {
    echo 'Mam was wszystkich w DUPIE !!!'."<br>\n";
}


