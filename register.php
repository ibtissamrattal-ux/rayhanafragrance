<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users(full_name,email,password) VALUES(?,?,?)");
$stmt->execute([$full_name,$email,$password]);

header('Location: index.html');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Inscription</title>
</head>
<body>

<div class="login-container">
<div class="login-box">

<h1 class="login-title">Créer un compte</h1>

<form class="login-form" method="POST">
<input type="text" name="full_name" placeholder="Nom complet" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Mot de passe" required>

<button type="submit" class="login-btn">
S'inscrire
</button>
</form>

</div>
</div>

</body>
</html>
