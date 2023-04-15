<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link herf="style.css" stylsheet="">
</head>
<body>
<?php
require 'config.php';
?>

 <?php  
 session_start();
 $_SESSION["connected"]=false;
if(isset($_POST["mail"]) && isset($_POST["password"])) {

    $email="douniani.ahamada@gmail";
    $password= "Samirrayanne";

    if ($_POST["mail"]==$email && $_POST["password"]==$password){
        $_SESSION["connected"]=true;
        echo $_POST["mail"];

    } 
    else{ echo "information incorecte";
    }
   
}  
if($_SESSION["connected"]=true){
    //echo "vous êtes connecté";
}
 
?>
<form action="forum.php" method="post">
    <div class=" forme">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name"><br>
        <label for="name">prénom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="mail"><br>
        <label for="password">password</label>
    <input type="password" id="password" name="password"><br>
    </div>
    <input type="submit" name="submit">
</form>
<a herf="deconnected.php"> deconnectez</a>
</body>
</html>