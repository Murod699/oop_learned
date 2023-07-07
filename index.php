<?php

require_once 'config/bootstrap.php';
$posts = Post::getAll();

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>oop BLOG</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h3>OOP blog</h3>
        <a href="create.php">Post yaratish</a>
        <?php foreach($posts as $post): ?> 
        <ul>
            <li>

            <h4><?= $post->id;?></h4>
            <a href="batafsil.php?id=<?=$post->id?>"><h4><?= $post->title;?></h4></a>
            <p><?= $post->body;?></p>
            <h4><?= $post->created_at; ?></h4>
            </li>
            
        </ul> 
        <?php endforeach; ?>   
        <script src="" async defer></script>
    </body>
</html>