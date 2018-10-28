<?php if(isset($_SESSION['user'])): ?>
<!-- NAVBAR BEGIN -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">Fake News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/authors.php">Authors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/my_news.php">My News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/processing/user/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<!-- NAVBAR END -->
<?php else: ?>
<!-- NAVBAR BEGIN -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">Fake News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/authors.php">Authors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login.php">Become an author</a>
            </li>
        </ul>
    </div>
</nav>
<!-- NAVBAR END -->
<?php endif; ?>