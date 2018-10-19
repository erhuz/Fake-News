<?php 

class NewsManager extends Manager{
    
    // Define variables
    private $database = '';

    public function __construct()
    {
        $database = new ConnectToDatabase;
    }
}