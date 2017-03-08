<?php

/** @var Silex\Application|false $app */
$app = require __DIR__ . '/../vendor/bolt/bolt/app/web.php';

// If we're running PHP's built-in webserver, `web.php` returns `false`,
// meaning the path is a file. If so, we pass it along.
if ($app === false) {
    return false;
}

// Include the aws file is it has been enabled for this website
$aws = __DIR__ . '/../aws.php';
if (file_exists($aws)) {
    include __DIR__ . '/../aws.php';
}

$app->run();
