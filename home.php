<?php 
$get = file_get_contents('http://localhost/iutRivesDeSeine/twitter/API.php?api=userposts');
$posts = json_decode($get);

foreach($posts as $post) {
    echo($post->idUser);
    echo($post->content);
    echo($post->date);
}