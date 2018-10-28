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

// Replace 'New Lines' with a <br> tag
$_POST['content'] = str_replace(PHP_EOL, '<br>', $_POST['content']);

// Set insert query & parameters
$query = 'UPDATE posts SET title = :title, content = :content WHERE id = :id AND author = :author;';
$params = [
    ':title' => $_POST['title'],
    ':content' => $_POST['content'],
    ':id' => $_POST['id'],
    ':author' => $_SESSION['user']['id'],
];


// If data successfully inserted
if($db->setData($query, $params)){

    // Set message
    setMessage('Successfully edited the article.', 'Updated!', 'success');

    // Redirect back to my news
    header('location: /my_news.php');
    exit;
}else{
    
    // Set message
    setMessage('Failed to edit the article.', 'Could not update article!', 'danger');

    // Redirect back to my news
    header('location: /my_news.php');
    exit;
}