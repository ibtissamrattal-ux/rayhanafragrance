<?php
require 'config.php';

$user_id = 1;

$query = "
SELECT cart.id,
cart.quantity,
products.name,
products.price,
products.image
FROM cart
JOIN products ON cart.product_id = products.id
WHERE cart.user_id = ?
";

$stmt = $pdo->prepare($query);
$stmt->execute([$user_id]);
$items = $stmt->fetchAll();

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
<title>Panier</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="cart-container">
<h1>Votre Panier</h1>

<?php foreach($items as $item):
$total += $item['price'] * $item['quantity'];
?>

<div class="cart-item">
<img src="<?php echo $item['image']; ?>">

<div>
<h3><?php echo $item['name']; ?></h3>
<p>Quantité : <?php echo $item['quantity']; ?></p>
<p><?php echo $item['price']; ?> DH</p>
</div>

<a href="remove-from-cart.php?id=<?php echo $item['id']; ?>" class="remove-btn">
Supprimer
</a>

</div>

<?php endforeach; ?>

<h2>Total : <?php echo $total; ?> DH</h2>

<a href="checkout.php" class="checkout-btn">
Acheter maintenant
</a>

</div>

</body>
</html>
