<?php
declare (strict_types = 1);
/**
 * This is the page that users
 * will use for registering
 * and loggin in.
 */

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$title = 'Login / Register';


/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/auth_form.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';