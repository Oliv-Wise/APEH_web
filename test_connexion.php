<?php
require 'db/includes/env.php';

$dsn = "pgsql:host=$host;dbname=$db";

try { 
    $pdo = new PDO($dsn, $user, $pass);
    echo "Connexion réussie à la base de données PostgreSQL !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
