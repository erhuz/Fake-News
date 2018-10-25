<?php
declare (strict_types = 1);

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'My News';

if(!isset($_SESSION['user'])){
    setMessage('You\'re not logged in.', 'Access denied.', 'warning');
    header('location: /login.php');
    exit;
}


$db = new connectToDatabase;

$query = 'SELECT * FROM news WHERE author=:id;';
$params = [
    ':id' => $_SESSION['user']['id']
];

// This data goes into my_news.php
$articles = $db->getData($query, $params);

// If article id to edit is set
if(isset($_GET['edit'])){
    // Get information about the article
    $query = 'SELECT * FROM news WHERE id=:id;';
    $params = [
        ':id' => $_GET['edit']
    ];

    $tmp_arr = $db->getData($query, $params);


    // If the logged in user isn't the author of the article, abort
    if($tmp_arr[0]['author'] !== $_SESSION['user']['id']){
        setMessage('You don\'t have any news with such an ID.', 'Woops!', 'warning');
        header('location: /my_news.php');
        exit;
    }

    // Convert special HTML entities back to characters 
    // & replace <br> tags with \n (new lines).
    $tmp_arr[0]['content'] = str_replace("<br>", "\n",
        htmlspecialchars_decode($tmp_arr[0]['content'])
    ); 

    // Give article array a more readable name
    $article_to_edit = $tmp_arr[0];

    // Remove temporary array
    unset($tmp_arr);
}

/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/my_news.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';