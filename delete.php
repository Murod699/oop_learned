<?php
require_once 'config/bootstrap.php';
$id = $_POST['delete'];
$result = Post::delete($id);
if($result == 1){
    header('location: index.php');
}
?>