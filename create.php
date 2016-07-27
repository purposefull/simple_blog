<?php

require_once 'model.php';


if ($_POST['id']) {

    $link = open_database_connection();

    $query = 'INSERT INTO post (title, body, created_at) VALUES (:title, :body, :created_at)';
    $statement = $link->prepare($query);
    $statement->bindValue (':id', $_POST ['id'], PDO::PARAM_STR);
    $statement->bindValue (':title', $_POST ['title'], PDO::PARAM_STR);
    $statement->bindValue (':body', $_POST ['body'], PDO::PARAM_STR);
    $statement->bindValue (':created_at', $_POST ['created_at'], PDO::PARAM_STR);
    $statement->execute();

    $data = get_post_by_id($_POST['id']);

    $id = $link->lastInsertId();
    
}

header('Location: edit.php');

$date = date('Y-m-d H:i:s', time());


require_once 'templates/create.php';

