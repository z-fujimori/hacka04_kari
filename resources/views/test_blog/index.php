<?php

$pdo = new PDO("mysql:dbname=test_blog; host=localhost;port=3306; charset=utf8","root","");
    $st = $pdo->query("SELECT * FROM post ORDER BY no DESC");
    $posts = $st->fetchAll();
    for($i=0;$i<count($posts);$i++){
        $st = $pdo->query("SELECT * FROM coment WHERE post_no{$posts[$i]['no']} ORDER BY no DESC");
        $posts[$i]['nomments'] = $st->fetchAll();
    }
    require 't_index.php';