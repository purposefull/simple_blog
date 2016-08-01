<?php

require_once 'Model.php';

class BlogPost
{
    protected $id;

    protected $title;

    protected $body;

    protected $created_at;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function save()
    {
            $Model = new Model();

            $PDO = $Model->open_database_connection();

            $query = 'INSERT INTO post (title, body, created_at) VALUES (:title, :body, :created_at)';
            $statement = $PDO->prepare($query);
            $statement->bindValue(':title', $this->title, PDO::PARAM_STR);
            $statement->bindValue(':body', $this->body, PDO::PARAM_STR);
            $statement->bindValue(':created_at', $this->created_at, PDO::PARAM_STR);
            $statement->execute();

            return $PDO->lastInsertId();

    }

    public function findById($id)
    {

        $Model = new Model();

        $link = $Model->open_database_connection();

        $query = 'SELECT id, FROM post WHERE  id=:id';
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $Model->close_database_connection($link);

        return $row;



    }

    public function delete($id)
    {
        $Model = new Model();

        $link = $Model->open_database_connection();

        $query = "DELETE FROM post WHERE `id`=:id";
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_STR);
        $statement->execute();
    }


}


