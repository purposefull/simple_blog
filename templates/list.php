<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <?php foreach ($posts as $post): ?>
    <li>
        <a href="/show.php?id=<?php echo $post['id'] ?>">
            <?php echo $post['tittle'] ?>
        </a>
    </li>
<?php endforeach ?>
</ul>
</body>
</html>