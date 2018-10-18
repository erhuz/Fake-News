<?php
declare (strict_types = 1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require_once('db.php');
require_once('functions.php');

$title = 'News';

$news = new NewsManager;
$author = new AuthorManager;


?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('components/head.php'); ?>

<body>
    <?php require_once('components/nav.php'); ?>

    <!-- CONTENT BEGIN -->
    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h1><?=$title?></h1>
                </div>
            </div>
            <div class="row">
                <pre>
                <?php 
                    
                    // TODO: Continue building Manager classes, fix news manager bugs.
                    //! FIXME: Uncaught Error: Call to a member function setData() on string in /Users/erhuz/Sites/yrgo/php/Fake-News/functions.php:47 

                    // $author->create('Benjamin Fransson', 'benjamin@cafcon.se', 'biudbgdoubgd');
                    die(var_dump($news->create(
                        'PlaceholderTitle', 
                        'Lorem ipsum .',
                        1)));
                    

                    // print_r($author->get());
                    // print_r($news->get(1));
                    
                ?>


</pre>


            </div>
        </div>
    </main>
    <!-- CONTENT END -->

    <?php require_once('components/footer.php'); ?>
</body>

</html>