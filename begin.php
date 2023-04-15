<?php
session_start();


// on valide le formulaire
if (isset($_POST['email']) && isset($_POST['password'])) {
    foreach($menu as $user){
        if(
            $user['email']===$_POST['email'] && $user['password'] === $_POST['passwoord'])
            {
                $loggedUser = [ 'email' => $user['eamil']];
            } 
            else {   $errormsg = 'les informations sont erronés'. $_POST['email']. $_POST['password'];

            }
    }
}
?>
