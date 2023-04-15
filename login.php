<?php
session_start() ?>

<title>"Page d'inscription"</title>

<h1>Je suis sur la page d'inscription</h1>

<form action="traitement_inscriptions.php" method="post"> 
    <label for="nom">Nom et Prenom:</label><br>
    <input type="nom" id="" name="nom"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="" name="password"><br>
    <button type="submit">Envoyer</button><br>
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