<?php
// model.php
require_once 'Model.php';

$Model = new Model ();

$posts = $Model->get_all_posts();
    
    
require 'templates/list.php';



