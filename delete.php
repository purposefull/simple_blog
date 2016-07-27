<?php
<<<<<<< HEAD

$id = $_REQUEST['id'];

require_once 'model.php';

$link = open_database_connection();

$query = "DELETE FROM post WHERE `id`=:id";
$statement = $link->prepare($query);
$statement->bindValue (':id', $id, PDO::PARAM_STR);
$statement->execute();

echo 'запись c id = ' . $id . ' была успешно удалена';
=======

$id = $_REQUEST['id']

("DELETE FROM `post` WHERE `id`=\"$id\"");
>>>>>>> 7d752e789a07e2c5301300b4a50deb35078d41fb
