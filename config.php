<?php
define ("DB_URL", "mysql:host=localhost;dbname=cours3"); 
define ("DB_USER", "root"); 
define ("DB_PASS", "");
?>
<?php
function dbConnect() {    // récup de l'id de connection BD
    global $pdo;
    try {
        $pdo = new PDO(DB_URL, DB_USER, DB_PASS);
        // Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
        $pdo->exec('SET NAMES UTF8');
    }
    catch (PDOException $e) {
        //$html [] = "<p class='error'>Erreur: " . $e->getMessage() . "</p>";
        die("<p class='error'>Erreur: " . $e->getMessage() . "</p>");    // on arrête tout!
    }
}
?>
<?php
//OBTENIR LES USERS
function getUsers() {
    define ("SQL_ALL_USER", "SELECT * FROM users ORDER BY id");
    global $pdo;
    $query = $pdo->prepare(SQL_ALL_USER);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    //var_dump ($data); // données ok?
    foreach ($data as $users) {
        echo "
            {$users["mail"]}
            {$users["prenom"]}
            
        ";
    }
}
?>