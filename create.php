<?php

require_once 'model.php';

//createAction
$link = open_database_connection();

$query = 'INSERT INTO post (title, body, created_at) VALUES (:title, :body, :created_at)';
$statement = $link->prepare($query);
$statement->bindValue (':title', $_POST ['title'], PDO::PARAM_STR);
$statement->bindValue (':body', $_POST ['body'], PDO::PARAM_STR);
$statement->bindValue (':created_at', $_POST ['created_at'], PDO::PARAM_STR);
$statement->execute();

$id = $link->lastInsertId();

$date = date('Y-m-d H:i:s', time());

//function date();

require_once 'templates/create.php';

