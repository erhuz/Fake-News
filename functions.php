<?php
declare (strict_types = 1);

function setMessage(string $message, ?string $title = null, ?string $type = null) : void
{
    // Prepare message
    $tmp_msg['content'] = $message;

    if($title !== null){
        $tmp_msg['title'] = $title;
    }

    $tmp_msg['type'] = $type;

    // Set message
    global $_SESSION;
    $_SESSION['messages'][] = $tmp_msg;
}