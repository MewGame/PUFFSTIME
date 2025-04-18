<?php
DEFINE('RACINE', '/PUFFSTIME/')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUFFSTIME</title>
    <link rel="stylesheet" href="<?= RACINE ?>css/style.css">
    <link rel="stylesheet" href="<?= RACINE ?>css/mobile.css">
</head>
<body>
<header>
        <img src="<?= RACINE ?>images/logo.png" alt="">
        <a href="<?=RACINE?>pages/inscription.php">Sign up</a>
    </header>
        <nav>
            <a href="<?=RACINE?>pages/accueil.php"></a>
            <a href="<?=RACINE?>pages/produits.php">Produits</a>
            <a href="<?=RACINE?>pages/panier.php">Panier</a>
        </nav>