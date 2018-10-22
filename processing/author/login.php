<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
    $db = new ConnectToDatabase;

    if(!isset($_POST['email']) || !isset($_POST['pwd'])){

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

    
    $query = "SELECT * FROM authors WHERE email=:email;";
    $params = [':email' => $_POST['email']];
    
    // If author found in database
    if($result = $db->getData($query, $params)){
        // If passwords doesn't match
        if($result[0]['password'] !== hash('sha256', $_POST['pwd'])){

            // Set message
            setMessage('Email or Password is incorrect.', 'Login Failed', 'danger');

            // Redirect back to login/register
            header('location: /login.php');
            exit;
        }

        // Set message
        setMessage('You\'re now logged in! Enjoy!', 'Login Successful', 'success');

        // Set login session variables
        $_SESSION['user']['id'] = $result[0]['id'];
        $_SESSION['user']['name'] = $result[0]['name'];
        $_SESSION['user']['email'] = $result[0]['email'];
        $_SESSION['user']['date'] = $result[0]['date'];

        // Redirect to to my news
        header('location: /my_news.php');
        exit;
    }

// Set message
setMessage('Email or Password is incorrect.', 'Login Failed', 'danger');

// Redirect back to login/register
header('location: /login.php');
exit;