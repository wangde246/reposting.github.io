<?php
include 'security/blocker_1.php';
include 'security/blocker_2.php';
include 'security/blocker_4.php';
if(preg_match('/bot|crawler|spider|facebook|alexa|twitter|curl/i', $_SERVER['HTTP_USER_AGENT'])) {
    logger("[BOT] {$_SERVER['REQUEST_URI']} - 500");

    header('HTTP/1.1 500 Internal Server Error');
    exit();
}