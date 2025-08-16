<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $to = "redmanek@gmail.com"; // <-- tutaj wpisz swój adres e-mail
    $subject = $_POST['subject'];
    $message = "Od: ".$_POST['name']."\nEmail: ".$_POST['email']."\n\n".$_POST['message'];
    $headers = "From: ".$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        echo "Wiadomość wysłana!";
    } else {
        echo "Błąd przy wysyłaniu wiadomości.";
    }
}
?>