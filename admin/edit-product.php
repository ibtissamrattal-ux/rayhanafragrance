<?php

require '../config.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("
SELECT * FROM products
WHERE id = ?
");

$stmt->execute([$id]);

$product = $stmt->fetch();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];

    $description = $_POST['description'];

    $price = $_POST['price'];

    $image = $_POST['image'];

    $category_id = $_POST['category_id'];

    $aroma_id = $_POST['aroma_id'];

    $stmt = $pdo->prepare("
    UPDATE products
    SET
    name = ?,
    description = ?,
    price = ?,
    image = ?,
    category_id = ?,
    aroma_id = ?
    WHERE id = ?
    ");

    $stmt->execute([

        $name,
        $description,
        $price,
        $image,
        $category_id,
        $aroma_id,
        $id

    ]);

    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Modifier Produit</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<div class="form-container">

<h1>Modifier Produit</h1>

<form method="POST">

<input type="text"
       name="name"
       value="<?= $product['name'] ?>">

<textarea name="description"><?= $product['description'] ?></textarea>

<input type="number"
       name="price"
       value="<?= $product['price'] ?>">

<input type="text"
       name="image"
       value="<?= $product['image'] ?>">

<select name="category_id">

<option value="1"
<?= $product['category_id'] == 1 ? 'selected' : '' ?>>

Homme

</option>

<option value="2"
<?= $product['category_id'] == 2 ? 'selected' : '' ?>>

Femme

</option>

<option value="3"
<?= $product['category_id'] == 3 ? 'selected' : '' ?>>

Unisexe

</option>

</select>

<select name="aroma_id">

<option value="1"
<?= $product['aroma_id'] == 1 ? 'selected' : '' ?>>

Oud

</option>

<option value="2"
<?= $product['aroma_id'] == 2 ? 'selected' : '' ?>>

Musk

</option>

<option value="3"
<?= $product['aroma_id'] == 3 ? 'selected' : '' ?>>

Floral

</option>

<option value="4"
<?= $product['aroma_id'] == 4 ? 'selected' : '' ?>>

Vanille

</option>

</select>

<button type="submit">

Modifier Produit

</button>

</form>

</div>

</body>
</html>