<?php
namespace Model;

class PostDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM blogs";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $posts = [];
        foreach ($result as $row)
        {
            $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created']);
            $post->id = $row['id'];
            $posts[] = $post;
        }
        return $posts;
    }

    public function create($post)
    {
        $sql = "INSERT INTO blogs(title, teaser, content, created) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->title);
        $statement->bindParam(2, $post->teaser);
        $statement->bindParam(3, $post->content);
        $statement->bindParam(4, $post->created);
        return $statement->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM blogs WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result = $statement->fetch();
        $post = new Post($result['title'], $result['teaser'], $result['content'], $result['created']);
        $post->id = $result['id'];
        return $post;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM blogs WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $post)
    {
        $sql = "UPDATE blogs SET title = ?, teaser = ?, content = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->title);
        $statement->bindParam(2, $post->teaser);
        $statement->bindParam(3, $post->content);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }
}
