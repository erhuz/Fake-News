<?php
declare (strict_types = 1);

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'News';

$db = new connectToDatabase;

$query = 'SELECT * FROM news;';

// This data goes into index.php
$articles = $db->getData($query);

/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/index.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';