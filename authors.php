<?php
declare (strict_types = 1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
$title = 'Authors';
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
                
            </div>
        </div>
    </main>
    <!-- CONTENT END -->

    <?php require_once('components/footer.php'); ?>
</body>

</html>