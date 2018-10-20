<?php 

if(!isset($_POST['title']) || !isset($_POST['content'])){
    // Prepare message
    $tmp_msg['content'] = 'Input went missing! Please try again.';
    $tmp_msg['type'] = 'danger';

    // Set message
    $_SESSION['messages'][] = $tmp_msg;

    // Redirect back to my_news
    header('/my_news.php');
    exit;
}

// TODO: Implement logic to insert news/articles