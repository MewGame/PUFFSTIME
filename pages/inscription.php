<?php
    include "../inc/top.php"
?>
    <main>
        <form action="traitement.php" method="post">
            <input type="text" id="lastname" name="lastname" placeholder="Nom de Famille" maxlength="100">
            <input type="text" id="firstname" name="firstname" placeholder="Prénom" maxlength="100">
            <input type="text" id="email" name="email" placeholder="Adresse Mail" maxlength="100">
            <input type="text" id="city" name="city" placeholder="Ville" maxlength="100">
            <input type="text" id="cp" name="cp" placeholder="Code Postal" maxlength="100">
            <input type="text" id="tel" name="tel" placeholder="Téléphone" maxlength="100">
            <input type="submit">
        </form>
</main>
<?php
    include "../inc/bottom.php"
?>