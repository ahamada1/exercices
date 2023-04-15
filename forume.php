
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="cascading.css" rel="stylesheet">
</head>
<body>

<?php
session_start();
$_SESSION["connected"] = true;

require 'menu.php'; 

?>
<form action="process.php" method="post">
    <label for="id">login</label>
    <input type="text" id="id" name="id">
    <label for="password">password</label>
    <input type="password" id="password" name="password">
    <input type="submit" name="submit">
</form>

</body>
</html>
