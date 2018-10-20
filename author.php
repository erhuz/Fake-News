<?php
declare (strict_types = 1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
$title = 'Author';

if(!isset($_GET['id'])){
    // Prepare message
    $tmp_msg['content'] = 'Something went wrong! Please try again.';
    $tmp_msg['type'] = 'danger';

    // Set message
    $_SESSION['messages'][] = $tmp_msg;

    // Redirect back to authors
    header('location: /authors.php');
    exit;
}


// TODO: Get given authors info & posted news articles.

/* REQUIRE HTML */

require_once $_SERVER['DOCUMENT_ROOT'].'/components/head.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/nav.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/components/messages.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/content/author.php'; // Content

require_once $_SERVER['DOCUMENT_ROOT'].'/components/footer.php';