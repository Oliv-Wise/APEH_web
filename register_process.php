<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require 'vendor/autoload.php';

require_once 'db/includes/db_config.php'; // Connexion PDO sécurisée
$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0 || !str_contains($line, '=')) {
            continue;
        }
        list($key, $value) = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($value);
        putenv(trim($key) . '=' . trim($value));
    }
} else {
    die("Le fichier .env est introuvable.");
}

if (!getenv('GMAIL_USERNAME')) {
    die("Erreur : Le fichier .env n'est pas chargé ou GMAIL_USERNAME est vide !");
}


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
$contact_nom = clean($_POST['contact'] ?? '');
$contact_phone = clean($_POST['contact_phone'] ?? '');
$domaine = clean($_POST['domain'] ?? '');
$statut = clean($_POST['status'] ?? '');


// Validation minimale
if (!$prenom || !$nom || !$email || !$telephone || !$adresse) {
    die("Données manquantes ou invalides.");
}

// Insertion sécurisée dans la base
try {
$stmt = $pdo->prepare("INSERT INTO users (nom, prenom, adresse, telephone, email, contact_nom, contact_phone, domaine, statut)
VALUES (:nom, :prenom, :adresse, :telephone, :email, :contact_nom, :contact_phone, :domaine, :statut)");

$stmt->execute([
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':adresse' => $adresse,
    ':telephone' => $telephone,
    ':email' => $email,
    ':contact_nom' => $contact_nom,
    ':contact_phone' => $contact_phone,
    ':domaine' => $domaine,
    ':statut' => $statut
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
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = getenv('GMAIL_USERNAME');
    $mail->Password = getenv('GMAIL_APP_PASSWORD');
    $mail->SMTPSecure = 'tls';
    $mail->setFrom('apehfrance.noreply@gmail.com', 'APEH-France');
    $mail->addAddress($email, $prenom);
    $mail->isHTML(true);
    $mail->Subject = '=?UTF-8?B?' . base64_encode("Bienvenue à l'APEH-France !") . '?=';
    $mail->Body = "
        <html>
        <head><meta charset='utf-8'></head>
        <body style='font-family:Luminari', 'Segoe UI';'>
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
