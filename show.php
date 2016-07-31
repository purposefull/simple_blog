<?php

require_once 'Model.php';



$post = get_post_by_id($_GET['id']);

require 'templates/show.php';