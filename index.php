<?php
declare (strict_types = 1);
/**
 * This is the landing page, the first page the
 * visitors will see.
 * 
 * It will display the news in the DB, sorted
 * by creation date; descending.
 */

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'News';

// Create new ConntectToDatabase object
$db = new connectToDatabase;

// Set query to retrieve relevant information
$query = 'SELECT posts.id,
                posts.title,
                posts.content,
                posts.author,
                posts.likes,
                posts.date,
                users.name,
                users.email 
    FROM posts JOIN users ON posts.author = users.id ORDER BY posts.date DESC;';

// This data goes into index.php
$results = $db->getData($query);


/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/index.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';