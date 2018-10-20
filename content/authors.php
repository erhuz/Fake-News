<?php
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
                    <div class="card-header"><h4><?php echo ucfirst($author['name']); ?></h4></div>
                    <div class="card-body">
                        <p class="card-text"><?php echo ucfirst($author['name']); ?> has created <?php echo $news_amount; ?> news articles.<br>
                        Author registered on <?php echo $author['date']; ?>.</p>
                        <a class="card-link" href="/author.php?id=<?php echo $author['id']; ?>">View <?php echo ucfirst($author['name']); ?>'s profile.</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>