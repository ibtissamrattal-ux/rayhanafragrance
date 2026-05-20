<?php
session_start();

require 'config.php';

$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare(
"SELECT * FROM users WHERE id = ?"
);

$stmt->execute([$user_id]);

$user = $stmt->fetch();
<?= $user['full_name']; ?>
?>

<!DOCTYPE html>
<html>
<head>
<title>Profil</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="profile-container">
<h1>Mon Profil</h1>
<p>Bienvenue sur Rayhana Fragrance</p>
</div>

</body>
</html>
