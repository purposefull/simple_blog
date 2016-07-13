<?php $tittle = $posts['tittle'] ?>

<?php ob_start() ?>
<h1><?= $posts['tittle'] ?></h1>

<div class="date"><?= $posts['created_at'] ?></div>
<div class="body">
    <?= $posts['body'] ?>
</div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
