<?php

require_once 'Model.php';

$Model = new Model();

$post = $Model->get_post_by_id($_GET['id']);

require 'templates/show.php';