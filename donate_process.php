<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$nom = htmlspecialchars($_POST['nom'] ?? '');
$prenom = htmlspecialchars($_POST['prenom'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$montant = htmlspecialchars($_POST['montant_cache'] ?? ($_POST['autre_montant'] ?? ''));

if (!$nom || !$prenom || !$email || !$montant) {
    die("Tous les champs sont requis.");
}

$mail = new PHPMailer(true);

try {    

    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 1025;
    $mail->SMTPAuth = false;

    $mail->setFrom('no-reply@apeh-france.org', 'APEH-France');
    $mail->addAddress($email, $prenom);

    $mail->isHTML(true);
    $mail->Subject = '=?UTF-8?B?' . base64_encode('Merci pour votre don à APEH-France') . '?=';
    $mail->Body = "
        <html>
        <head><meta charset='utf-8'></head>
        <body>
            <h2>Merci pour votre soutien !</h2>
            <p>Bonjour <strong>{$prenom} {$nom}</strong>,</p>
            <p>Nous avons bien reçu votre don de <strong>{$montant}</strong> à APEH-France.</p>
            <p>Votre générosité contribue directement à nos actions solidaires. Merci encore !</p>
            <p><strong>L'équipe APEH-France</strong></p>
        </body>
        </html>
    ";

    $mail->send();
    header("Location: donate_confirmation.php");
    exit();

} catch (Exception $e) {
    echo "Erreur : le message n'a pas pu être envoyé. {$mail->ErrorInfo}";
}
?>
