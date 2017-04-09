<?php

require_once 'BlogPost.php';

$BlogPost = BlogPost::findById($_REQUEST['id']);
$BlogPost->delete($_REQUEST['id']);

header('Location: list.php');



