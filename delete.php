<?php
$id = $_REQUEST['id'];

query ("DELETE FROM `post` WHERE `id`=\"$id\"");
