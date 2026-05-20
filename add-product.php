<?php
if($_SESSION['user_id'] != 1){

    header("Location: ../login.php");
    exit();

}
require '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $category_id = $_POST['category_id'];
    $aroma_id = $_POST['aroma_id'];
    $is_bestseller = isset($_POST['is_bestseller']) ? 1 : 0;

    $stmt = $pdo->prepare("
    INSERT INTO products
    (name, description, price, image, category_id, aroma_id, is_bestseller)
    VALUES(?,?,?,?,?,?,?)
    ");

    $stmt->execute([
        $name,
        $description,
        $price,
        $image,
        $category_id,
        $aroma_id,
        $is_bestseller
    ]);

    echo "Produit ajouté avec succès";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Ajouter Produit</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<div class="form-container">

<h1>Ajouter un Produit</h1>

<form method="POST">

<input type="text"
       name="name"
       placeholder="Nom du parfum"
       required>

<textarea name="description"
          placeholder="Description"></textarea>

<input type="number"
       name="price"
       placeholder="Prix">

<input type="text"
       name="image"
       placeholder="assets/image.jpg">

<select name="category_id">

<option value="1">Homme</option>

<option value="2">Femme</option>

<option value="3">Unisexe</option>

</select>

<select name="aroma_id">

<option value="1">Oud</option>

<option value="2">Musk</option>

<option value="3">Floral</option>

<option value="4">Vanille</option>

</select>

<label>

<input type="checkbox"
       name="is_bestseller">

Best Seller

</label>

<button type="submit">
Ajouter Produit
</button>

</form>

</div>

</body>
</html>