<?php
declare (strict_types = 1);
/**
 * This is the page that the users visit to
 * display all the authors, so that they
 * then can go and view articles published
 * by an author of their choosing.
 */

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'Authors';

// Create new ConntectToDatabase object
$db = new ConnectToDatabase;

// Set the pre-defined query
$query = 'SELECT * FROM users ORDER BY date ASC;';

// Get data from DB, it is required by authors.php
$users = $db->getData($query);

/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/authors.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';