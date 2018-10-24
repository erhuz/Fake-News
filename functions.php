<?php
declare (strict_types = 1);
/**
 * This is the file where functions
 * will be kept. 
 * 
 * All functions should be in this file,
 * except for the ConnectToDatabase Class.
 */


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