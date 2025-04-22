<?php
    include "../inc/top.php"
    include '../structure/connexion.php';
    #Normalement je voulais que ça affiche le panier automatiquement dès qu'on va sur le nav du panier mais je comprends pas du tout comment faut faire donc je vous laisse juste le SQL
    #$id_client = 1;
    #$sql = "SELECT p.Nom, p.prix, c.quantité
        #FROM commandes c
        #JOIN produits p ON c.id_produits = p.id
        #WHERE c.id_clients = ?";

?>

    <section class="panier">
        <form action="traitement.php" method="post">
            <input type="number" id="quantité" name="quantité" placeholder="Quantité">
            <input type="submit">
        </form>
    </section>

<?php
    include "../inc/bottom.php"
?>


