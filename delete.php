<?php

require_once 'Model.php';

require_once 'BlogPost.php';

$Model = new Model();

$id = $_REQUEST['id'];

$BlogPost = new BlogPost();

$BlogPost->findById($id);

$BlogPost->delete($id);

print_r($BlogPost->findById($id));

echo 'запись c id = ' . $id . ' была успешно удалена';