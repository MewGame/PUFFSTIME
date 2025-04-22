<?php
include '../structure/connexion.php';

/* TEST Mais vu que je n'ai pas tout ce qu'il faut pour faire fonctionner je vous mets ça : */
 $id_client = 1;

if (isset($_POST['id_produit']) && isset($_POST['quantite'])) {
    $id_produit = (int) $_POST['id_produit'];
    $quantite = (int) $_POST['quantite'];

    if ($check->rowCount() > 0) {
        $pdo->prepare("UPDATE commandes SET quantité = quantité + ? WHERE id_clients = ? AND id_produits = ?")
            ->execute([$quantite, $id_client, $id_produit]);
    } else {
        $pdo->prepare("INSERT INTO commandes (id_clients, id_produits, quantité) VALUES (?, ?, ?)")
            ->execute([$id_client, $id_produit, $quantite]);
    }

    header("Location: panier.php");
} else {
    header("Location: pb.php");
} 

?>