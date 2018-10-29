<?php
declare (strict_types = 1);
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

                <?php if(isset($post_to_edit)): ?>

                    <form action="/processing/posts/edit.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="title">News Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title..." value="<?= $post_to_edit['title']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="content">News Content</label>
                                <textarea class="form-control" name="content" id="content" rows="10" required><?= $post_to_edit['content']; ?></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?= $post_to_edit['id'];?>">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                        </fieldset>
                    </form>

                <?php else: ?>

                    <form action="/processing/posts/create.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="title">News Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title..." required>
                            </div>
                            <div class="form-group">
                                <label for="content">News Content</label>
                                <textarea class="form-control" name="content" id="content" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                        </fieldset>
                    </form>
                <?php endif; ?>

            </div>
        </div>

        <?php if (!$posts): ?>
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

        <div class="row">
            <?php foreach ($posts as $post): ?>

                <div class="col-12 col-lg-6">
                    <div class="card border-primary mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col"><h4><?= $_SESSION['user']['name']; ?></h4></div>
                                <div class="col d-flex justify-content-end"><a class="btn btn-warning" href="/my_news.php?edit=<?= $post['id']; ?>">Edit post</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><?= $post['date']; ?></div>
                                <div class="col d-flex justify-content-end"><a class="btn btn-danger" href="/processing/posts/delete.php?id=<?= $post['id']; ?>">Delete post</a></div>
                            </div>
                            <div class="row">
                                <div class="col">Likes: <?= $post['likes']; ?></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <?= $post['title']; ?>
                            </h4>
                            <p class="card-text">
                                <?= $post['content']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
        <?php endif;?>
    </div>
</main>