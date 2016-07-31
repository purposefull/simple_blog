<?php

require_once 'Model.php';

$Model = new Model();

$id = $_REQUEST['id'];

$BlogPost = new BlogPost();

$BlogPost->findById($id);

$BlogPost->delete();

echo 'запись c id = ' . $id . ' была успешно удалена';