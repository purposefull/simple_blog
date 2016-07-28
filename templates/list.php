<?php require 'layout.php'?>
    <body>
        <h1>List of Posts</h1>

       <table class='table'>
           <thead>
           <tr>
               <th>#</th>
               <th>title</th>
               <th>edit</th>
               <th>delete</th>
           </tr>
           </thead>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td>
                            <?php echo $post['id'] ?>

                    </td>
                    <td>
                        <a href="/show.php?id=<?php echo $post['id'] ?>">
                        <?php echo $post['title'] ?>
                    </a>
                    </td>
                    <td>
                        <a href="/edit.php?id=<?php echo $post['id'] ?>">
                        edit
                    </a>
                    </td>
                    <td>
                        <a href="/delete.php?id=<?php echo $post['id'] ?>">
                        delete
                    </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>