<?php
declare (strict_types = 1);

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'My News';


$db = new connectToDatabase;
$query = 'SELECT * FROM news;';

// This data goes into my_news.php
$articles = $db->getData($query);


/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/my_news.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';