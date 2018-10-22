<?php
declare (strict_types = 1);

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$db = new ConnectToDatabase;

// If any input is missing
if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['pwd']) || !isset($_POST['pwd2'])){

    // Set message
    setMessage('Something went wrong! Please try again.', 'Woops!', 'danger');

    // Redirect back to login/register
    header('location: /');
    exit;
}

// Sanitize user input
foreach($_POST as $key => $value){
    $_POST[$key] = strip_tags(htmlentities($value));
}

// Password confirmation check
if($_POST['pwd'] !== $_POST['pwd2']){

    // Set message
    setMessage('Passwords didn\'t match, try again.', 'Registration failed.', 'warning');

    // Redirect back to login/register
    header('location: /login.php');
    exit;
}


// Set select query & parameters
$query = "SELECT * FROM authors WHERE email=:email;";
$params = [':email' => $_POST['email']];

// If email already registered
if($db->getData($query, $params)){

    // Set message
    setMessage('An account is already associated with that email, try another one.', 'Registration Failed', 'danger');

    // Redirect back to login/register
    header('location: /login.php');
    exit;
}

// Set insert query & parameters
$query = 'INSERT INTO authors(name, email, password) VALUES(:name, :email, :password);';
$params = [
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':password' => hash('sha256', $_POST['pwd'])
];

// If data successfully inserted
if($db->setData($query, $params)){

    // Set message
    setMessage('Registration successful, you can now log in!', 'Registration Complete!', 'success');

    // Redirect back to login/register
    header('location: /login.php');
    exit;
}else{
    
    // Set message
    setMessage('Failed to store provided information.', 'Registration Failed', 'danger');

    // Redirect back to login/register
    header('location: /login.php');
    exit;
}