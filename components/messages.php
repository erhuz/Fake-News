<?php

declare (strict_types = 1);


if(isset($_SESSION['messages'])):

    $messages = $_SESSION['messages'];

?>
<div class="container mt-4"> <!-- Messages container -->
    <?php foreach($messages as $mess): ?>  

        <?php 
            if(isset($mess['type'])){
                $color = $mess['type'];
            }else{
                $color = 'primary';
            }
        ?>

        <div class="row"> <!-- Message row -->
        
            <div class="col-12 alert alert-dismissible alert-<?= $color ?>">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php if(isset($mess['title'])): ?>
                    <h4><?= $mess['title']; ?></h4>
                <?php endif; ?>
                <p><?= $mess['content']; ?></p>
            </div>

        </div> <!-- /Message row -->
    <?php endforeach; ?>
</div> <!-- /Messages container -->

<?php
$_SESSION['messages'] = [];
unset($_SESSION['messages']);   // Remove messages after being listed.
endif; 