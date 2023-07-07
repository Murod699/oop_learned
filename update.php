<?php 
require_once 'config/bootstrap.php';
$id = $_GET['id'];

$post = Post::showPost($id);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $body = $_POST['body'];

    $result = Post::update($id, $title, $body);
    var_dump($result);
    if($result == 1){
        header('location: index.php');
        exit;
    }
}
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
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <form method="post" action="">
            <h4>Sarlavha</h4><br>
            <input type="text" name="title" value="<?=$post->title?>"><br>
            <h4>Post matni</h4><br>
            <textarea cols="40" rows="20" name="body"><?=$post->body?></textarea>
            <button type="submit">Saqlash</button>
        </form>
        
        <script src="" async defer></script>
    </body>
</html>