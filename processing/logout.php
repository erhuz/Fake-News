<?php 
// Start session (otherwhise we can't access the session vars)
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';

// Remove the user session
unset($_SESSION['user']);

// Set logout message
setMessage('You\'re now logged out.');

// Redirect back to the start page
header('location: /');
exit;