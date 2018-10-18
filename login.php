<?php
declare (strict_types = 1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

$title = 'Become an author';

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
            <div class="row mt-4">
                <div class="col">
                    <div class="card border-primary mb-3">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form action="users.php" method="post">
                                <label for="name">Name</label><br>
                                <input type="text" name="name" id="name"><br>
                                <label for="email">Email</label><br>
                                <input type="email" name="email" id="email"><br>
                                <label for="pwd">Password</label><br>
                                <input type="password" name="pwd" id="pwd"><br>
                                <label for="pwd">Confirm Password</label><br>
                                <input type="password" name="pwd2" id="pwd2"><br>
                                <input type="hidden" name="action" value="register">
                                <input class="mt-3 btn btn-primary" type="submit" value="Register">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">       
                    <div class="card border-primary mb-3">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form action="users.php" method="post">
                                <label for="name">Name</label><br>
                                <input type="text" name="name" id="name"><br>
                                <label for="email">Email</label><br>
                                <input type="email" name="email" id="email"><br>
                                <label for="pwd">Password</label><br>
                                <input type="password" name="pwd" id="pwd"><br>
                                <input type="hidden" name="action" value="login">
                                <input class="mt-3 btn btn-primary" type="submit" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- CONTENT END -->

    <?php require_once('components/footer.php'); ?>
</body>

</html>