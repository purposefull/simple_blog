<?php

require_once 'BlogPost.php';

$BlogPost = BlogPost::findById($_REQUEST['id']);
$BlogPost->delete($id);

echo 'запись c id = ' . $id . ' была успешно удалена';