<?php

require_once 'model.php';

$post = get_post_by_id($_GET['id']);

$link = open_database_connection();

$query = 'INSERT INTO post (title, body, created_at) VALUES (:title, :body, :created_at)';
$statement = $link->prepare($query);
$statement->bindValue (':title', $_POST ['title'], PDO::PARAM_STR);
$statement->bindValue (':body', $_POST ['body'], PDO::PARAM_STR);
$statement->bindValue (':created_at', $_POST ['created_at'], PDO::PARAM_STR);
$statement->execute();

$id = $link->lastInsertId();


require_once 'templates/edit.php';