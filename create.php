<?php

require_once 'BlogPost.php';

if ($_POST['title'] & $_POST['body'] & $_POST['created_at']) {

  //$link = open_database_connection();
//
//    $query = 'INSERT INTO post (title, body, created_at) VALUES (:title, :body, :created_at)';
//   $statement = $link->prepare($query);
//    $statement->bindValue (':title', $_POST ['title'], PDO::PARAM_STR);
//    $statement->bindValue (':body', $_POST ['body'], PDO::PARAM_STR);
//    $statement->bindValue (':created_at', $_POST ['created_at'], PDO::PARAM_STR);
//    $statement->execute();

    $BlogPost = new BlogPost();
    $BlogPost->setTitle($_POST['title']);
    $BlogPost->setBody($_POST['body']);
    $BlogPost->setCreatedAt($_POST['created_at']);
    $id = $BlogPost->save();
    //$data = get_post_by_id($_POST['id']);

   // $id = $link->lastInsertId();

    header('Location: edit.php?id='.$id);

}

$date = date('Y-m-d H:i:s', time());

require_once 'templates/create.php';