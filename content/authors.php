<?php
declare (strict_types = 1);

$db = new ConnectToDatabase;

$query = 'SELECT * FROM authors;';
$authors = $db->getData($query);

$query = 'SELECT title FROM news WHERE id=:id;';

?>
<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1><?=$title?></h1>
            </div>
        </div>
        <?php foreach($authors as $author): ?>
        <?php
            $params = [':id' => $author['id']];
            $news_amount = count($db->getData($query, $params));
        ?>
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <div class="card border-primary mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col"><h4><?= ucfirst($author['name']); ?></h4></div>
                            <div class="col d-flex justify-content-end"><a class="card-link btn btn-primary" href="/author.php?id=<?= $author['id']; ?>">View profile.</a></div>
                        
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="card-text"><?= ucfirst($author['name']); ?> has created <?= $news_amount; ?> news articles.<br>
                        Author registered on <?= $author['date']; ?>.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>