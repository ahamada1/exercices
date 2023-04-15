
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="cascading.css" rel="stylesheet">
</head>
<body>
<h1> connnexion </h1>
<?php
session_start();
$_SESSION["connected"] = true;

require 'menu.php'; 

  //require 'login.php';
 
  
 if(isset($loggeUser)):
  ?>
    <?php 
    foreach(get_login($login, $limit) as $logine):
     ?>
        <formulaire>
        <h3> <?php echo $logine['title']; ?> </h3>
        <div><?php echo $logine['logine'];?></div>
        <i><?php echo display_author($logine['author'], $users); ?> </i>
        </formulaire>

        <?php endforeach ?>
        <?php endif; ?>
        </div>
       
        
          <form action="process.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name"><br>
        <label for="name">prénom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail"><br>
        <label for="mail">repeter l'e-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail"><br>
        <label for="password">password</label>
    <input type="password" id="password" name="password"><br>
    <label for="password">repeter le password</label>
    <input type="password" id="password" name="password">
    </div>
    <input type="submit" name="submit">
</form>

   

</body>
</html>