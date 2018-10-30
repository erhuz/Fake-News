<?php

declare (strict_types = 1);


if(isset($_SESSION['messages'])):

    $messages = $_SESSION['messages'];

?>
<div class="container mt-4"> <!-- Messages container -->
    <?php foreach($messages as $mess): ?>  
        <div class="row"> <!-- Message row -->
            <?php if($mess['type'] === 'secondary'): ?>
            <div div class="col-12 alert alert-dismissible alert-secondary">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php if(isset($mess['title'])): ?>
                    <h4><?= $mess['title']; ?></h4>
                <?php endif; ?>
                <p><?= $mess['content']; ?></p>
            </div>

            <?php elseif($mess['type'] === 'success'): ?>
            <div class="col-12 alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php if(isset($mess['title'])): ?>
                    <h4><?= $mess['title']; ?></h4>
                <?php endif; ?>
                <p><?= $mess['content']; ?></p>
            </div>

            <?php elseif($mess['type'] === 'info'): ?>
            <div class="col-12 alert alert-dismissible alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php if(isset($mess['title'])): ?>
                    <h4><?= $mess['title']; ?></h4>
                <?php endif; ?>
                <p><?= $mess['content']; ?></p>
            </div>

            <?php elseif($mess['type'] === 'warning'): ?>
            <div class="col-12 alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php if(isset($mess['title'])): ?>
                    <h4><?= $mess['title']; ?></h4>
                <?php endif; ?>
                <p><?= $mess['content']; ?></p>
            </div>

            <?php elseif($mess['type'] === 'danger'): ?>
            <div class="col-12 alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php if(isset($mess['title'])): ?>
                    <h4><?= $mess['title']; ?></h4>
                <?php endif; ?>
                <p><?= $mess['content']; ?></p>
            </div>

            <?php else: ?>
            <div class="col-12 alert alert-dismissible alert-primary">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php if(isset($mess['title'])): ?>
                    <h4><?= $mess['title']; ?></h4>
                <?php endif; ?>
                <p><?= $mess['content']; ?></p>
            </div>

            <?php endif; ?>
        </div> <!-- /Message row -->
    <?php endforeach; ?>
</div> <!-- /Messages container -->

<?php
$_SESSION['messages'] = [];
unset($_SESSION['messages']);   // Remove messages after being listed.
endif; 