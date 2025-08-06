<?php
// Empfänger-E-Mail-Adresse
$empfaenger = "autocentermina@gmx.de"; // <--- hier deine echte E-Mail eintragen

// Formulardaten auslesen
$name = $_POST['name'] ?? '';
$mail = $_POST['telefon'] ?? '';
$telefon = $_POST['datum'] ?? '';
$datum = $_POST['uhrzeit'] ?? '';
$anliegen = $_POST['nachricht'] ?? 'Keine Nachricht.';

// Betreff und Nachricht
$betreff = "Neue Terminanfrage von $name";
$text = "Name: $name\nE-Mail: $mail\nTelefon: $telefon\nDatum: $datum\n\nAnliegen:\n$anliegen";

// Header
$headers = "From: autocentermina@gmx.de; 

// Mail senden
if (mail($empfaenger, $betreff, $text, $headers)) {
    echo "Vielen Dank! Ihre Anfrage wurde gesendet.";
} else {
    echo "Fehler beim Senden der Nachricht.";
}
?>