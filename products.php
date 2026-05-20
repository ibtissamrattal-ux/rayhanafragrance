<?php
require 'config.php';

$category = isset($_GET['cat']) ? $_GET['cat'] : '';
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Produits - Rayhana Fragrance</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<header class="sticky-header">

    <div class="logo-container">

        <img src="assets/logo.png"
             class="site-logo">

        <div class="logo">
            Rayhana Fragrance
        </div>

    </div>

    <nav>

        <a href="home.html">Home</a>

        <a href="products.php?cat=homme">
            Homme
        </a>

        <a href="products.php?cat=femme">
            Femme
        </a>

        <a href="products.php?cat=unisexe">
            Unisexe
        </a>

    </nav>

</header>

<section class="products-page">

    <h1>Nos Parfums</h1>

    <!-- FILTRES -->

    <div class="filters">

        <select id="aromaFilter"
                onchange="filterProducts()">

            <option value="all">
                Tous les arômes
            </option>

            <option value="oud">
                Oud
            </option>

            <option value="musk">
                Musk
            </option>

            <option value="floral">
                Floral
            </option>

            <option value="vanille">
                Vanille
            </option>

        </select>

        <select id="priceFilter"
                onchange="filterProducts()">

            <option value="all">
                Tous les prix
            </option>

            <option value="300">
                Moins de 300 DH
            </option>

            <option value="500">
                Moins de 500 DH
            </option>

            <option value="1000">
                Moins de 1000 DH
            </option>

        </select>

    </div>

    <!-- PRODUITS -->

    <div class="products-grid">

        <!-- HOMME -->

        <div class="product-card"
             data-aroma="oud"
             data-price="699">

            <img src="assets/homme-oud-1.jpg">

            <h3>Royal Oud</h3>

            <p>699 DH</p>

            <button onclick="addToCart(1)">
                Ajouter au panier
            </button>

        </div>

        <div class="product-card"
             data-aroma="musk"
             data-price="299">

            <img src="assets/homme-musk-1.jpg">

            <h3>Black Musk</h3>

            <p>299 DH</p>

            <button onclick="addToCart(2)">
                Ajouter au panier
            </button>

        </div>

        <!-- FEMME -->

        <div class="product-card"
             data-aroma="floral"
             data-price="450">

            <img src="assets/femme-floral-1.jpg">

            <h3>Floral Beauty</h3>

            <p>450 DH</p>

            <button onclick="addToCart(3)">
                Ajouter au panier
            </button>

        </div>

        <div class="product-card"
             data-aroma="vanille"
             data-price="499">

            <img src="assets/femme-vanille-1.jpg">

            <h3>Vanilla Rose</h3>

            <p>499 DH</p>

            <button onclick="addToCart(4)">
                Ajouter au panier
            </button>

        </div>

        <!-- UNISEXE -->

        <div class="product-card"
             data-aroma="musk"
             data-price="549">

            <img src="assets/unisexe-musk-1.jpg">

            <h3>Musk Elixir</h3>

            <p>549 DH</p>

            <button onclick="addToCart(5)">
                Ajouter au panier
            </button>

        </div>

        <div class="product-card"
             data-aroma="oud"
             data-price="799">

            <img src="assets/unisexe-oud-1.jpg">

            <h3>Oud Prestige</h3>

            <p>799 DH</p>

            <button onclick="addToCart(6)">
                Ajouter au panier
            </button>

        </div>

    </div>

</section>

<script src="script.js"></script>

</body>
</html>