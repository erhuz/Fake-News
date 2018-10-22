<?php
$db = new connectToDatabase;

$query = 'SELECT * FROM news;';
$articles = $db->getData($query);
?>
<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>
                    <?=$title?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/processing/create_news.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="title">News Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title...">
                        </div>
                        <div class="form-group">
                            <label for="content">News Content</label>
                            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <?php if (!$articles): ?>
        <div class="row mt-4">
            <div class="col">
                <h2>You have not created any news yet! Get started!</h2>
            </div>
        </div>
        <?php else: ?>
        <div class="row mt-4">
            <div class="col">
                <h2>Your articles:</h2>
            </div>
        </div>
        <?php endif;?>
        <?php foreach ($articles as $article): ?>
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3">
                    <div class="card-header">
                        <?php echo $article['date']; ?>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $article['title']; ?>
                        </h4>
                        <p class="card-text">
                            <?php echo $article['content']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</main>