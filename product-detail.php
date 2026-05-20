<?php
require 'config.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $product['name']; ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="product-detail">
<div>
<img src="assets/<?php echo $product['image']; ?>" alt="">
<h1><?php echo $product['name']; ?></h1>
<p><?php echo $product['description']; ?></p>
<h2><?php echo $product['price']; ?> DH</h2>
<button class="btn-primary"
onclick="addToCart(<?php echo $product['id']; ?>)">
26
Ajouter au panier
</button>
</div>
</div>
<script src="script.js"></script>
</body>
</html>