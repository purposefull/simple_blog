<?php

require_once 'BlogPost.php';

if ($_POST['title'] & $_POST['body'] & $_POST['created_at']) {

    $BlogPost = new BlogPost();
    $BlogPost->setTitle($_POST['title']);
    $BlogPost->setBody($_POST['body']);
    $BlogPost->setCreatedAt($_POST['created_at']);
    $id = $BlogPost->save();

    header('Location: list.php');
}

$date = date('Y-m-d H:i:s', time());

require_once 'View/create.php';