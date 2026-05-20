<?php

$host = 'localhost';
$dbname = 'rayhana_db';
$username = 'ibtissam';
$password = '123Ibtissam';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    die("Erreur connexion : " . $e->getMessage());
}
session_start();
?>
