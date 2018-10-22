<?php 
declare (strict_types = 1);

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$db = new ConnectToDatabase;

if(!isset($_POST['title']) || !isset($_POST['content'])){

    // Set message
    setMessage('Input went missing! Please try again.', 'Woops!', 'danger');

    // Redirect back to my_news
    header('location: /my_news.php');
    exit;
}

// Sanitize user input
foreach($_POST as $key => $value){
    $_POST[$key] = strip_tags(htmlentities($value));
}

// Set insert query & parameters
$query = 'INSERT INTO news(title, content, likes) VALUES(:title, :content, :likes);';
$params = [
    ':title' => $_POST['title'],
    ':content' => $_POST['content'],
    ':likes' => rand(0, 40)
];

// If data successfully inserted
if($db->setData($query, $params)){

    // Set message
    setMessage('Created a news article, go check it out!', 'Successfully created an article!', 'success');

    // Redirect back to my news
    header('location: /my_news.php');
    exit;
}else{
    
    // Set message
    setMessage('Failed to create an article.', 'Could not create article!', 'danger');

    // Redirect back to my news
    header('location: /my_news.php');
    exit;
}