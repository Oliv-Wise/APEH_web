<?php
require_once __DIR__ . '/env.php'; // contient les identifiants

$dsn = "pgsql:host=$host;dbname=$db";
try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    error_log("Erreur BDD : " . $e->getMessage());
    die("Une erreur est survenue. Veuillez réessayer plus tard.");
}


?>
