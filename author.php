<?php
declare (strict_types = 1);
/**
 * This is the page that users visit to
 * display articles created by specific
 * authors. So only one author at a time.
 */

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'Author';

if(!isset($_GET['id'])){

    // Set message
    setMessage('Something went wrong! Please try again.', 'Woops!', 'danger');

    // Redirect back to authors
    header('location: /authors.php');
    exit;
}

// Create new ConntectToDatabase object
$db = new ConnectToDatabase;

// Get given author w/ his/hers articles
$query = 'SELECT * FROM users JOIN posts ON users.id = posts.author WHERE users.id=:id ORDER BY date';
$params = [
    ':id' => $_GET['id']
];

// Get results from DB
$results = $db->getData($query, $params);

if($results){
    $title = $results[0]['name'];
}else{
    $title = 'No posts from this user.';
}

/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/author.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';