<?php 
// Start session (otherwhise we can't access the session vars)
session_start();

// Remove the user session
unset($_SESSION['user']);

// Redirect back to the start page
header('location: /');
exit;