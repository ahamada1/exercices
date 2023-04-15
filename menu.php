<doctype html>
<header>
    <meta charset="UTF-8">
    <html lang="en">
</header>
<?php

$menu = [
    ['label' => 'home', 'href' => 'home.php'],
    ['label' => 'begin', 'href' => 'begin.php'],
    ['label' => 'déconnexion', 'href' => 'déconnexion.php'],
    ['label' => 'forume', 'href' => 'forume.php'], 
    ['label' => 'process', 'href' => 'process.php']  
];

foreach($menu as $link){ 

?>
<a href='<?= $link['href']?>'><?= $link['label']?></a>
<?php
}
?>


