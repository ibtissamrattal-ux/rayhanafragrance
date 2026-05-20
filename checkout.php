<?php
session_start();

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();

}

$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Commande</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="checkout-container">

<h1>Finaliser votre commande</h1>

<form class="checkout-form">

<input type="text" placeholder="Nom complet" required>

<input type="text" placeholder="Ville" required>

<input type="text" placeholder="Adresse complète" required>

<input type="tel" placeholder="Téléphone" required>

<textarea placeholder="Informations supplémentaires"></textarea>

<button type="submit">
Confirmer la commande
</button>

</form>

<p class="cod-text">
Paiement à la livraison disponible partout au Maroc 🇲🇦
</p>

</div>

</body>
</html>
