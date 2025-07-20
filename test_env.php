<?php
require 'vendor/autoload.php';

use Dotenv\Dotenv;

// Chemin absolu
$path = __DIR__;
echo "Chemin actuel : $path\n";

if (!file_exists($path . '/.env')) {
    die("❌ Le fichier .env n'existe pas à cet endroit.");
}

$dotenv = Dotenv::createImmutable($path);
$dotenv->safeLoad();  // Utilise safeLoad() pour éviter exceptions bloquantes

echo "GMAIL_USERNAME = " . getenv('GMAIL_USERNAME') . PHP_EOL;
echo "GMAIL_APP_PASSWORD = " . getenv('GMAIL_APP_PASSWORD') . PHP_EOL;
