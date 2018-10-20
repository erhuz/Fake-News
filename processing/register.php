<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';

    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // TODO: Sanisize user input

    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['pwd']) || !isset($_POST['pwd2'])){

        // Prepare message
        $tmp_msg['content'] = 'Something went wrong! Please try again.';
        $tmp_msg['type'] = 'danger';

        // Set message
        $_SESSION['messages'][] = $tmp_msg;

        // Redirect back to login/register
        header('location: /');
        exit;
    }

    $db = new ConnectToDatabase;


    $query = "SELECT * FROM authors WHERE email=:email;";
    $params = [':email' => $_POST['email']];

    if($_POST['pwd'] !== $_POST['pwd2']){

        // Prepare message
        $tmp_msg['title'] = 'Registration failed.';
        $tmp_msg['content'] = 'Passwords didn\'t match, try again';
        $tmp_msg['type'] = 'warning';

        // Set message
        $_SESSION['messages'][] = $tmp_msg;

        // Redirect back to login/register
        header('location: /login.php');
        exit;

    }
    
    if($db->getData($query, $params)){

        // Prepare message
        $tmp_msg['title'] = 'Registration Failed';
        $tmp_msg['content'] = 'An account is already associated with that email, try another one.';
        $tmp_msg['type'] = 'danger';

        // Set message
        $_SESSION['messages'][] = $tmp_msg;

        // Redirect back to login/register
        header('location: /login.php');
        exit;
    }
    
    $query = 'INSERT INTO authors(name, email, password) VALUES(:name, :email, :password);';
    $params = [
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => hash('sha256', $_POST['pwd'])
    ];
    
    if($db->setData($query, $params)){

        // Prepare message
        $tmp_msg['title'] = 'Registration Complete!';
        $tmp_msg['content'] = 'Registration successful, you can now log in!';
        $tmp_msg['type'] = 'success';

        // Set message
        $_SESSION['messages'][] = $tmp_msg;

        // Redirect back to login/register
        header('location: /login.php');
        exit;
    }else{

        // Prepare message
        $tmp_msg['title'] = 'Registration Failed';
        $tmp_msg['content'] = 'Failed to store provided information';
        $tmp_msg['type'] = 'danger';

        // Set message
        $_SESSION['messages'][] = $tmp_msg;

        // Redirect back to login/register
        header('location: /login.php');
        exit;
    }