<?php
echo 'default';

$posts = getAllPosts();
foreach($posts as $post) {
    echo($post['idUser']);
    echo($post['content']);
    echo($post['date']);
}