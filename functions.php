<?php

class AuthorManager{
    private $database;

    public function __construct()
    {
        $database = new ConnectToDatabase;
    }

    public function create(string $name, string $email, string $password)
    {
        
    }
}

class NewsManager{
    private $database;

    public function __construct()
    {
        $database = new ConnectToDatabase;
    }

    public function create(string $title, string $content, string $author)
    {
        
    }
}
