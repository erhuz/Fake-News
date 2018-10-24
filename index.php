<?php
declare (strict_types = 1);

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'News';

// Create new ConntectToDatabase object
$db = new connectToDatabase;

// Set query to retrieve relevant information
$query = 'SELECT news.id,
                news.title,
                news.content,
                news.author,
                news.likes,
                news.date,
                authors.name,
                authors.email 
    FROM news JOIN authors ON news.author = authors.id ORDER BY news.date DESC;';

// This data goes into index.php
$results = $db->getData($query);


/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/index.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';