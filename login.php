<?php
session_start();
?>

<h1>Page Login</h1>


<form action="traitement_donnees.php" method="post"> 
    <label for="id">id:</label>  <br>
    <input type="id" id="" name="id"> <br>
    <label for="password">Password:</label><br>
    <input type="password" id="1203" name="password"><br>
    <button type="submit">Envoyer</button>  <br>
</form>



<?php
require 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = $_POST['password'];
    $mdpCrypter = crypter_mot_de_passe($mdp); 
    dbConnect(); 
    createUser($nom, $prenom, $mdpCrypter); 
    header('Location: index.php'); 
    exit;
} ?>

