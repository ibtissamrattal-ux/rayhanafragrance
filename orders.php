<?php
require '../config.php';

$stmt = $pdo->query("
SELECT * FROM orders
ORDER BY created_at DESC
");

$orders = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Commandes</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<div class="orders-container">

<h1>Commandes Clients</h1>

<table>

<tr>

<th>ID</th>

<th>Nom</th>

<th>Email</th>

<th>Ville</th>

<th>Téléphone</th>

<th>Total</th>

<th>Statut</th>

</tr>

<?php foreach($orders as $order): ?>

<tr>

<td><?= $order['id'] ?></td>

<td><?= $order['full_name'] ?></td>

<td><?= $order['email'] ?></td>

<td><?= $order['city'] ?></td>

<td><?= $order['phone'] ?></td>

<td><?= $order['total'] ?> DH</td>

<td><?= $order['status'] ?></td>

</tr>
<?php
if($order['status'] == 'pending'){
    echo "En attente";
}
elseif($order['status'] == 'shipped'){
    echo "Expédiée";
}
else{
    echo "Livrée";
}
?>

</td>

<td>

<form action="update-order.php"
      method="POST">

<input type="hidden"
       name="order_id"
       value="<?= $order['id'] ?>">

<select name="status">

<option value="pending">

En attente

</option>

<option value="shipped">

Expédiée

</option>

<option value="delivered">

Livrée

</option>

</select>

<button type="submit">

Modifier

</button>

</form>

</td>

</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>