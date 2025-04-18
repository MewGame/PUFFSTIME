<?php
    include "../inc/top.php"
?>
    <main>
        <form action="traitement.php" method="post">
            <input type="text" id="lastname" name="nom de famille" placeholder="Nom de Famille" maxlenght="100">
            <input type="text" id="firstname" name="prenom" placeholder="Prénom" maxlenght="100">
            <input type="text" id="email" name="email" placeholder="Adresse Mail" maxlenght="100">
            <input type="text" id="city" name="ville" placeholder="Ville" maxlenght="100">
            <input type="text" id="cp" name="code postal" placeholder="Code Postal" maxlenght="100">
            <input type="text" id="tel" name="telephone" placeholder="Téléphone" maxlenght="100">
            <input type="submit">
        </form>
</main>
<?php
    include "../inc/bottom.php"
?>