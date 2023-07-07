<?php


class Post {
    public static $pdo;
    public $id;
    public $title;
    public $body;
    public $created_at;


    public static function getAll(){
        $stmt = self::$pdo->prepare("SELECT * FROM posts");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute();
        $posts = $stmt->fetchAll();
        return $posts;
    }

    public static function showPost($id){
        $stmt = self::$pdo->prepare("SELECT * FROM posts WHERE id = ? ");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute([$id]);
        $post = $stmt->fetch();
        return $post;
    }

    public static function create($title, $body){
        $stmt = self::$pdo->prepare("INSERT INTO posts (title, body) values (:title, :body) ");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute([
            'title' => $title,
            'body' => $body
        ]);
        $row = $stmt->rowCount();
        return $row;
    }
    public static function update($id, $title, $body){
        $stmt = self::$pdo->prepare("UPDATE posts SET title=:title, body=:body WHERE id= :id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute([
            'id' => $id,
            'title' => $title,
            'body' => $body,
        ]);
        $row = $stmt->rowCount();
        return $row;
    }
    public static function delete($id){
        $stmt = self::$pdo->prepare("DELETE FROM posts WHERE id = ? ");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute([$id]);
        $row = $stmt->rowCount();
        return $row;
    }
}