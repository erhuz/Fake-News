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

/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/my_news.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';