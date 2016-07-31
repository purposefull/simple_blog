<?php

class Model
{
 public function open_database_connection()
 {
     $link = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '9112oleg');

     return $link;
 }

  public  function close_database_connection(&$link)
    {
        $link = null;
    }

    public function get_all_posts()
    {
        $link = $this->open_database_connection();

        $result = $link->query('SELECT id, title FROM post');

        $posts = array();

        while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            $posts[] = $row;
        }
        $this->close_database_connection($link);

        return $posts;
    }

    public  function get_post_by_id($id)
    {
        $link = $this->open_database_connection();

        $query = 'SELECT id, title, body, created_at  FROM post WHERE  id=:id';
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->close_database_connection($link);

        return $row;


    }
}