<?php $title = $post['title'] ?>

<?php ob_start() ?>

<!DOCTYPE html>
<html>

<h1><?= $post['title'] ?></h1>
<h1><?= $post['body'] ?></h1>
<h1><?= $post['created_at'] ?></h1>

</html>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
