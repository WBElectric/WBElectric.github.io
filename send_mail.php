<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "kontakt@wbtech.pl"; // Twój e-mail
    $headers = "From: $email\r\n";
    $body = "Imię i nazwisko: $name\nEmail: $email\nTemat: $subject\nWiadomość:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość wysłana!";
    } else {
        echo "Błąd podczas wysyłania wiadomości.";
    }
} else {
    // Jeśli nie POST
    http_response_code(405);
    echo "Metoda niedozwolona";
}
?>