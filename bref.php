<?php

require __DIR__.'/vendor/autoload.php';

$app = new \Bref\Application;
$app->simpleHandler(function (array $event) {
    return [
        'hello' => $event['name'] ?? 'world',
    ];
});
$app->run();