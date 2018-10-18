<?php


class AuthorManager{
    private $database = '';

    public function __construct()
    {
        $this->database = new ConnectToDatabase;
    }

    public function create(string $name, string $email, string $password)
    {
        $query = 'INSERT INTO authors(name, email, password) VALUES(:name, :email, :password)';
        $parameters = [':name' => $name, ':email' => $email, ':password' => $password];
        $this->database->setData($query, $parameters);
    }

    public function get(int $id = null)
    {
        $query = 'SELECT * FROM authors';
        if($id !== null && $id !== 0){
            $query .= ' WHERE id=:id;';
            $parameters = [':id' => $id];
            return $this->database->getData($query, $parameters);
        }

        $query .= ';';
        return $this->database->getData($query);
    }
}

class NewsManager{

    // Define variables
    private $database = '';

    public function __construct()
    {
        $database = new ConnectToDatabase;
    }

    public function create(string $title, string $content, int $author)
    {
        $query = 'INSERT INTO news(title, content, author, likes) VALUES(:title, :content, :author, :likes)';
        $parameters = [':title' => $title, ':content' => $content, ':author' => $author, ':likes' => 0];
        return $this->database->setData($query, $parameters);
    }

    public function update(string $title, string $content, int $author)
    {
        # code...
    }

    public function get(int $id)
    {
        $query = 'SELECT * FROM news WHERE author=:id';
        $parameters = [':id' => $id];
        return $this->database->getData($query, $parameters);
    }

    public function delete(int $id, int $author)
    {
        $query = 'DELETE FROM news WHERE id=:id;';
        $parameters = [':id' => $id];
        $this->database->setData($query, $parameters);
    }
}
