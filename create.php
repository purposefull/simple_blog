<!DOCTYPE html>
<html
<h1>Create Post</h1>

<form action="" method="post">
    <input type="text" placeholder="title" name="title"><br>
    <input type="text" placeholder="body" name="body"><br>
    <input type="text" placeholder="created_at" name="created_at"><br><br>
    <input type="submit" name="123">
</form>

<?php

require_once 'model.php';

//createAction

$query = 'INSERT INTO post (title, body, created_at) VALUES (:title, :body, :created_at)';
$statement = $link->prepare($query);
$statement->bindValue (':title', $_POST ['title'], PDO::PARAM_STR);
$statement->bindValue (':body', $_POST ['body'], PDO::PARAM_STR);
$statement->bindValue (':created_at', $_POST ['created_at'], PDO::PARAM_STR);
$statement->execute();

$id = $link->lastInsertId();

