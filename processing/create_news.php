<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$db = new ConnectToDatabase;

if(!isset($_POST['title']) || !isset($_POST['content'])){

    // Set message
    setMessage('Input went missing! Please try again.', 'Woops!', 'danger');

    // Redirect back to my_news
    header('/my_news.php');
    exit;
}

// Sanitize user input
foreach($_POST as $key => $value){
    $_POST[$key] = strip_tags(htmlentities($value));
}