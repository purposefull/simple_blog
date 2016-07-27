<?php

$id = $_REQUEST['id'];

require_once 'model.php';

$link = open_database_connection();

$query = "DELETE FROM post WHERE `id`=:id";
$statement = $link->prepare($query);
$statement->bindValue (':id', $id, PDO::PARAM_STR);
$statement->execute();

echo 'запись c id = ' . $id . ' была успешно удалена';