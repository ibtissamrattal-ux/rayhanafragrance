<?php

require '../config.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $stmt = $pdo->prepare("
    DELETE FROM products
    WHERE id = ?
    ");

    $stmt->execute([$id]);

    header("Location: dashboard.php");
    exit();

}
?>