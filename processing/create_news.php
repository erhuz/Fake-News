<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
$db = new ConnectToDatabase;

if(!isset($_POST['title']) || !isset($_POST['content'])){
    // Prepare message
    $tmp_msg['content'] = 'Input went missing! Please try again.';
    $tmp_msg['type'] = 'danger';

    // Set message
    $_SESSION['messages'][] = $tmp_msg;

    // Redirect back to my_news
    header('/my_news.php');
    exit;
}

// Sanitize user input
foreach($_POST as $key => $value){
    $_POST[$key] = strip_tags(htmlentities($value));
}