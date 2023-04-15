<?php
$menu = 
[
    [  'name' => 'home',  'link' => 'home' ],
    [ 'name' => 'login', 'link' => 'login' ],
    [  'name' => 'log-out',  'link' => 'log-out' ],
    [ 'name' => 'signin', 'link' => 'signin' ],
];

foreach($menu as $me) {
    echo("<a href='index.php?page=".$me['link']."'>".$me['name']."</a>");
}