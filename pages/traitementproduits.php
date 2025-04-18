<?php 

if (isset($_POST['name']) && !empty($_POST['price'])) {
    
    $nom = htmlspecialchars($_POST['name']);
    $prix = htmlspecialchars($_POST['price']);


    include '../structure/connexion.php';


    $auth = new PDO('mysql:server=localhost;dbname=puffstime', 'root', '');

    $sql = "INSERT INTO produits(nom, prix) VALUES ('$nom', '$prix')";

    if ($auth->query($sql)){
        header('Location:produits.php');
    } else {
        header('Location:pb.php');
    }
} else {
    header('Location:produits.php');
}