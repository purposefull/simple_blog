<?php
// model.php
require_once 'Mapper.php';

$Model = new Mapper ();

$posts = $Model->get_all_posts();
    
    
require 'templates/list.php';



