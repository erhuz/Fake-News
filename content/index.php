<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1><?=$title?></h1>
            </div>
        </div>
        <div class="row">

        <!-- News -->
            <?php foreach ($results as $result): ?>
                <div class="col-md-12 col-lg-10 offset-lg-1">
                    <div class="card border-primary mb-3">

                        <!-- News header -->
                        <div class="card-header">
                            <div class="row">
                                <div class="col"><h4><?= $result['name']; // Authors name ?></h4></div>
                            </div>
                        </div>

                        <!-- News content -->
                        <div class="card-body">
                            <h4 class="card-title">
                                <?= $result['title']; // Posts title ?>
                            </h4>

                            <p class="card-text">
                                <?= $result['content']; // Posts content ?>
                            </p>
                        </div>

                        <div class="card-footer text-muted">
                            <div class="row">
                                <div class="col">Likes: <?= $result['likes']; ?></div>
                                <div class="col d-flex justify-content-end">Published: <?= $result['date']; // Posts creation date ?></div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach;?>

        </div>
    </div>
</main>