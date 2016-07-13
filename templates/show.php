<?php $tittle = $post['title'] ?>

<?php ob_start() ?>

<h1><?= $post['title'] ?></h1>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
