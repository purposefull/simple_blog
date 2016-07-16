<?php

require_once 'model.php';

$post = get_post_by_id($_GET['id']);

var_dump($post['title']);

require_once 'templates/edit.php';