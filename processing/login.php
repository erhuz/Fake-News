<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
    $db = new ConnectToDatabase;

    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // TODO: Sanisize user input

    if(!isset($_POST['email']) || !isset($_POST['pwd'])){

        // Prepare message
        $tmp_msg['content'] = 'Something went wrong! Please try again.';
        $tmp_msg['type'] = 'danger';

        // Set message
        $_SESSION['messages'][] = $tmp_msg;

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
    
    if($result = $db->getData($query, $params)){
        // If passwords doesn't match
        if($result[0]['password'] !== hash('sha256', $_POST['pwd'])){

            // Prepare message
            $tmp_msg['title'] = 'Login Failed';
            $tmp_msg['content'] = 'Email or Password is invalid';
            $tmp_msg['type'] = 'danger';
    
            // Set message
            $_SESSION['messages'][] = $tmp_msg;

            // Redirect back to login/register
            header('location: /login.php');
            exit;
        }

        // Prepare message
        $tmp_msg['title'] = 'Login Successful';
        $tmp_msg['content'] = 'You\'re now logged in! Enjoy!';
        $tmp_msg['type'] = 'success';

        // Set message
        $_SESSION['messages'][] = $tmp_msg;

        // Set login session variables
        $_SESSION['user']['id'] = $result[0]['id'];
        $_SESSION['user']['name'] = $result[0]['name'];
        $_SESSION['user']['email'] = $result[0]['email'];
        $_SESSION['user']['date'] = $result[0]['date'];

        // Redirect back to login/register
        header('location: /login.php');
        exit;
    }