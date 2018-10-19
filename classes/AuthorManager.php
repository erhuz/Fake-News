<?php 

class AuthorManager extends Manager{
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