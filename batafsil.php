<?php
require_once 'config/bootstrap.php';
$id = $_GET['id']; 
$post = Post::showPost($id);
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
        <title>Post <?=$id?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <a href="update.php?id=<?=$post->id?>"> Tahrirlash</a> 
        <form method="post" action="delete.php">
        <button type="submit" value="<?=$post->id?>" name="delete">o'chirish</button>
        </form>
        <ul>
            <li><?=$post->id?></li>
            <li><?=$post->title?></li>
            <li><?=$post->body?></li>

        </ul>
        
        <script src="" async defer></script>
    </body>
</html>