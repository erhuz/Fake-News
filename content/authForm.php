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
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="processing/accounts.php" method="post">
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
            <div class="col">
                <div class="card border-primary mb-3">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form action="processing/accounts.php" method="post">
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
        </div>
    </div>
</main>