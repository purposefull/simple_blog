<?php

require_once 'BlogPost.php';

$BlogPost = BlogPost::findById($_GET['id']);

// if form is submit
if ($_POST['id']) {

    // update
    $BlogPost = BlogPost::findById($_POST['id']);

    $BlogPost->setTitle($_POST['title']);
    $BlogPost->setBody($_POST['body']);
    $BlogPost->setCreatedAt($_POST['created_at']);
    $BlogPost->save();

    // fetch
    $BlogPost = BlogPost::findById($_POST['id']);
}



require_once 'templates/edit.php';