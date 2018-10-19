<?php
declare (strict_types = 1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
session_start();

require_once 'classes/db.php';

$title = 'Authors';


// Require HTML

require_once 'components/head.php';

require_once 'components/nav.php';

require_once 'components/messages.php';

require_once 'content/authors.php'; // Content

require_once 'components/footer.php';