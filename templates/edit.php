<h1>Edit Post</h1>

<?php $post = get_post_by_id($_GET['id']);?>

<form action="" method="post">
    <input type="hidden"  name="id" value="<?php echo $post['id'] ?>"><br>
    <input type="text" placeholder="title" name="title" value="<?php echo $post['title'] ?>"><br>
    <input type="text" placeholder="body" name="body" value="<?php echo $post['body'] ?>"><br>
    <input type="text" placeholder="created_at" name="created_at" value="<?php echo $post['created_at'] ?>"><br><br>
    <input type="submit" name="send">
</form>
