<?php
declare (strict_types = 1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require_once('classes/db.php');

$title = 'Authors';

?>

<?php require_once('components/head.php'); ?>

<?php require_once('components/nav.php'); ?>

<?php require_once('content/authors.php'); ?>

<?php require_once('components/footer.php'); ?>