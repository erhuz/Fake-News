<?php
declare (strict_types = 1);

function setMessage(string $message, ?string $title, ?string $type)
{
    // Prepare message
    $tmp_msg['content'] = $message;

    if(isset($title)){
        $tmp_msg['title'] = $title;
    }
    if(isset($type)){
        $tmp_msg['type'] = $type;
    }

    // Set message
    global $_SESSION;
    $_SESSION['messages'][] = $tmp_msg;
}