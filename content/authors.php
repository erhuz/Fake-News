<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1><?=$title?></h1>
            </div>
        </div>
        <div class="row">
        <?php foreach($authors as $author): ?>
            <div class="col-sm-12 col-lg-6">
                <div class="card border-primary mb-3">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-8"><h4><?= ucfirst($author['name']); ?></h4></div>
                            <div class="col-4 d-flex justify-content-end"><a class="card-link btn btn-primary" href="/author.php?id=<?= $author['id']; ?>">View profile</a></div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="card-text"><?= ucfirst($author['name']); ?> registered on <?= $author['date']; ?></p>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</main>