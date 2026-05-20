<?php
session_start();
require '../config.php';
$stmt = $pdo->query("SELECT * FROM products");

$products = $stmt->fetchAll();
foreach($products as $product): 
?>
<html>
<div class="dashboard-product">

    <img src="../<?= $product['image'] ?>">

    <h3><?= $product['name'] ?></h3>

    <p><?= $product['price'] ?> DH</p>

    <a href="edit-product.php?id=<?= $product['id'] ?>"
       class="edit-btn">

       Modifier

    </a>

    <a href="delete-product.php?id=<?= $product['id'] ?>"
       class="delete-btn">

       Supprimer

    </a>

</div>
</html>
<?php endforeach; ?>
<?php

$productCount = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();

$orderCount = $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn();
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<title>Dashboard Admin</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<div class="admin-container">

    <h1>Dashboard Admin</h1>

    <div class="dashboard-cards">

        <div class="dashboard-card">

            <h2><?= $productCount ?></h2>

            <p>Produits</p>

        </div>

        <div class="dashboard-card">

            <h2><?= $orderCount ?></h2>

            <p>Commandes</p>

        </div>

    </div>

    <div class="admin-links">

        <a href="add-product.php">
            Ajouter Produit
        </a>

        <a href="orders.php">
            Voir Commandes
        </a>
        <a href="delete-product.php?id=<?= $product['id'] ?>"
            class="delete-btn">

       Supprimer

</a>

<a href="edit-product.php?id=<?= $product['id'] ?>"
   class="edit-btn">

   Modifier

</a>
    </div>

</div>

</body>
</html>