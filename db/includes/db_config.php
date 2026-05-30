<?php
// Priorité 1 : variables d'environnement système (Laravel Cloud, Heroku, etc.)
$host = getenv('DB_HOST') ?: null;
$db   = getenv('DB_DATABASE') ?: null;
$user = getenv('DB_USERNAME') ?: null;
$pass = getenv('DB_PASSWORD') ?: null;

// Priorité 2 : fichier env.php local (développement)
if (!$host && file_exists(__DIR__ . '/env.php')) {
    require_once __DIR__ . '/env.php';
}

// Valeurs par défaut si rien n'est défini
$host = $host ?: 'localhost';
$db   = $db   ?: 'apeh';
$user = $user ?: 'postgres';
$pass = $pass ?: '';

$dsn = "pgsql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    error_log("Erreur BDD : " . $e->getMessage());
    die("Une erreur est survenue. Veuillez réessayer plus tard.");
}
