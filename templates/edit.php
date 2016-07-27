<h1>Edit Post</h1>

<form action="" method="post">
    <input type="hidden"  name="id" value="<?php echo $data['id'] ?>"><br>
    <input type="text" placeholder="title" name="title" value="<?php echo $data['title'] ?>"><br>
    <input type="text" placeholder="body" name="body" value="<?php echo $data['body'] ?>"><br>
    <input type="text" placeholder="created_at" name="created_at" value="<?php echo $data['created_at'] ?>"><br><br>
    <input type="submit" name="send">
</form>
