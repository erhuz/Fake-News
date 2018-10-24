<?php
declare (strict_types = 1);

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'Authors';

// Create new ConntectToDatabase object
$db = new ConnectToDatabase;

// Set the pre-defined query
$query = 'SELECT * FROM authors ORDER BY date ASC;';

// Get data from DB, it is required by authors.php
$authors = $db->getData($query);

/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/authors.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';