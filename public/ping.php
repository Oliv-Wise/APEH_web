<?php

$token = $_GET['token'] ?? '';

if (! hash_equals('apeh-prod-check-2026-secret-long', $token)) {
    http_response_code(404);
    exit;
}

header('Content-Type: application/json');

echo json_encode([
    'php_ok' => true,
    'time' => date(DATE_ATOM),
    'has_vendor_autoload' => file_exists(__DIR__ . '/../vendor/autoload.php'),
    'has_vite_manifest' => file_exists(__DIR__ . '/build/manifest.json'),
    'has_db_host' => getenv('DB_HOST') !== false,
    'has_db_database' => getenv('DB_DATABASE') !== false,
    'has_db_username' => getenv('DB_USERNAME') !== false,
    'has_db_password' => getenv('DB_PASSWORD') !== false,
], JSON_PRETTY_PRINT);