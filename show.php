<?php

require_once 'BlogPost.php';

$post = BlogPost::findById($_GET['id']);

require 'templates/show.php';