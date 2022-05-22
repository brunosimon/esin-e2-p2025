<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

// Genders
$genders = [
    'male' => 'Male',
    'female' => 'Female',
    'non-binary' => 'Non Binary',
    'apache-helicopter' => 'Apache Helicopter',
    'sponge' => 'Sponge',
];

// Security
define('SALT', '76t!"ed#');

// Database
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'esin_p2025_first');
define('DB_USER', 'root');
define('DB_PASS', 'root');

$pdo = new PDO(
    'mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT,
    DB_USER,
    DB_PASS
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// Sessions
session_start();