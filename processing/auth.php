<?php 
    if(!isset($_POST['action'])){
        header('location: /');
    }

    $db = new ConnectToDatabase;
    $author = new AuthorManager;

    switch ($_POST['action']) {
        case 'register':

            break;
        
        case 'login':
            # code...
            break;

        default:
            # code...
            break;
    }