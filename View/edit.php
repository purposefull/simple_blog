`<?php require 'layout.php'?>

<body>
<h1>Edit Post</h1>

<form action="" method="post">
    <input type="hidden"  name="id" value="<?php echo $BlogPost->getId();  ?>"><br>
    <input type="text" placeholder="title" name="title" value="<?php echo $BlogPost->getTitle(); ?>"><br>
    <input type="text" placeholder="body" name="body" value="<?php echo $BlogPost->getBody(); ?>"><br>
    <input type="text" placeholder="created_at" name="created_at" value="<?php echo $BlogPost->getCreatedAt(); ?>"><br><br>
    <input class="btn" type="submit" name="send">
</form>

</body>