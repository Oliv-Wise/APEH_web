<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once 'db/includes/db_config.php'; // Connexion PDO sécurisée

// Fonction de nettoyage
function clean($data) {
    return trim(htmlspecialchars($data, ENT_QUOTES, 'UTF-8'));
}

// Récupération et nettoyage des champs requis
$prenom    = clean($_POST['firstname'] ?? '');
$nom       = clean($_POST['lastname'] ?? '');
$email     = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$telephone = clean($_POST['phone'] ?? '');
$adresse   = clean($_POST['adresse'] ?? '');

// Validation minimale
if (!$prenom || !$nom || !$email || !$telephone || !$adresse) {
    die("Données manquantes ou invalides.");
}

// 🔐 Insertion sécurisée dans la base
try {
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, adresse, telephone, email)
                           VALUES (:nom, :prenom, :adresse, :telephone, :email)");

    $stmt->execute([
        ':nom'       => $nom,
        ':prenom'    => $prenom,
        ':adresse'   => $adresse,
        ':telephone' => $telephone,
        ':email'     => $email
    ]);
} catch (PDOException $e) {
    // email est déjà utilisé (clé unique)
    if ($e->getCode() === '23505') {
        die("Cette adresse email est déjà utilisée.");
    }
    error_log("Erreur SQL : " . $e->getMessage());
    die("Erreur d'enregistrement. Veuillez réessayer plus tard.");
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
    $mail->Subject = '=?UTF-8?B?' . base64_encode("Bienvenue à l'APEH-France !") . '?=';
    $mail->Body = "
        <html>
        <head><meta charset='utf-8'></head>
        <body style='font-family: Arial, sans-serif;'>
            <h2>Bienvenue à l'APEH-France !</h2>
            <p>Bonjour <strong>{$prenom}</strong>,</p>
            <p>Nous sommes heureux de vous accueillir au sein de notre association.</p>
            <p>L'APEH-France œuvre pour la solidarité, la réussite et l'intégration des étudiants et professionnels haïtiens en France.</p>
            <p>Nous vous remercions pour votre confiance et espérons vous voir très bientôt à l’un de nos événements !</p>
            <p>➡️ Rejoignez notre groupe WhatsApp : 
            <a href=\"https://chat.whatsapp.com/HpaioVnPftfDqIRhdr4YDU\" target=\"_blank\">cliquer ici</a></p>
            <br>
            <p><strong>L'équipe APEH-France</strong></p>
        </body>
        </html>
    ";

    $mail->send();
    header("Location: register_confirmation.php");
    exit();
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur mailer : {$mail->ErrorInfo}";
}
