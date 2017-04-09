<?php

require_once 'Mapper.php';

class BlogPost
{
    protected $id;

    public $title;

    public $body;

    public $created_at;

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

    /**
     * Update and Insert Queries
     *
     * @return string
     */
    public function save()
    {
        $Model = new Mapper();
        $PDO = $Model->open_database_connection();

        if ($this->getId()) {
            // update existing object
            $query = 'UPDATE user SET title = :title, body = :body, created_at = :created_at  WHERE id=:id';
            $statement = $PDO->prepare($query);
            $statement->bindValue (':id', $this->id, PDO::PARAM_INT);
            $statement->bindValue (':title', $this->title, PDO::PARAM_STR);
            $statement->bindValue (':body', $this->body, PDO::PARAM_STR);
            $statement->bindValue (':created_at', $this->created_at, PDO::PARAM_STR);
            $statement->execute();
        } else {
            // new object insert
            $query = 'INSERT INTO user (title, body, created_at) VALUES (:title, :body, :created_at)';
            $statement = $PDO->prepare($query);
            $statement->bindValue(':title', $this->title, PDO::PARAM_STR);
            $statement->bindValue(':body', $this->body, PDO::PARAM_STR);
            $statement->bindValue(':created_at', $this->created_at, PDO::PARAM_STR);
            $statement->execute();
        }

        return $PDO->lastInsertId();

    }

    /**
     * @param $id
     * @return BlogPost
     */
    public static function findById($id)
    {
        $Model = new Mapper();

        $link = $Model->open_database_connection();

        $query = 'SELECT * FROM user WHERE  id=:id';
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $BlogPost = new self;
        $BlogPost->setId($row['id']);
        $BlogPost->setTitle($row['title']);
        $BlogPost->setBody($row['body']);
        $BlogPost->setCreatedAt($row['created_at']);

        $Model->close_database_connection($link);

        return $BlogPost;
    }

    public function delete($id)
    {
        $Model = new Mapper();

        $link = $Model->open_database_connection();

        $query = 'DELETE FROM user WHERE id=:id';
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }

}


