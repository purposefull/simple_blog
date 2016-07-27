<?php

require_once 'model.php';

$data = get_post_by_id($_GET['id']);

if ($_POST['id']) {

    $link = open_database_connection();

    $query = 'UPDATE post SET title = :title, body = :body, created_at = :created_at  WHERE id=:id';
    $statement = $link->prepare($query);
    $statement->bindValue (':id', $_POST ['id'], PDO::PARAM_STR);
    $statement->bindValue (':title', $_POST ['title'], PDO::PARAM_STR);
    $statement->bindValue (':body', $_POST ['body'], PDO::PARAM_STR);
    $statement->bindValue (':created_at', $_POST ['created_at'], PDO::PARAM_STR);
    $statement->execute();

    $data = get_post_by_id($_POST['id']);


   //$link->exec('UPDATE post SET  body = '.$_POST["body"].' WHERE id='.);

}


require_once 'templates/edit.php';