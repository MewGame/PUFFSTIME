<?php
    include "../inc/top.php"
?>
    <main>
        <form action="traitement.php" method="post">
            <input type="text" id="lastname" name="lastname" placeholder="Nom de Famille" maxlenght="100">
            <input type="text" id="firstname" name="firstname" placeholder="Prénom" maxlenght="100">
            <input type="text" id="email" name="email" placeholder="Adresse Mail" maxlenght="100">
            <input type="text" id="city" name="city" placeholder="Ville" maxlenght="100">
            <input type="text" id="cp" name="cp" placeholder="Code Postal" maxlenght="100">
            <input type="text" id="tel" name="tel" placeholder="Téléphone" maxlenght="100">
            <input type="submit">
        </form>
</main>
<?php
    include "../inc/bottom.php"
?>