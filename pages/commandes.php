<?php 

if (isset($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['email']) && !empty($_POST['city']) && !empty($_POST['cp']) && !empty($_POST['tel'])) {
    
    $nom = htmlspecialchars($_POST['lastname']);
    $prenom = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $ville = htmlspecialchars($_POST['city']);
    $cp = htmlspecialchars($_POST['cp']);
    $tel = htmlspecialchars($_POST['tel']);


    include '../structure/connexion.php';


    $auth = new PDO('mysql:server=localhost;dbname=puffstime', 'root', '');

    $sql = "INSERT INTO commandes(nom,prenom,email,ville,cp,tel) VALUES ('$nom', '$prenom', '$email', '$ville', '$cp', '$tel')";

    if ($auth->query($sql)){
        header('Location:inscription.php');
    } else {
        header('Location:pb.php');
    }
} else {
    header('Location:inscription.php');
}