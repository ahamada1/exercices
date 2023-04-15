<?php

$stmt = $db->prepare("insert into posts (id, created_at, content) values (?, ?, ?)");
$stmt->execute([null, date("Y-m-d H:i:s"), $_POST["content"]]);

header('Location: '.$_SERVER['HTTP_REFERER']);