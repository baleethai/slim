<?php

require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function ($req, $res, $args = []) {
    return $res->withJson([
        'status'  => true,
        'message' => 'ok, get',
    ], 200)->withHeader('Content-type', 'application/json');
});

$app->put('/', function ($req, $res, $args = []) {
    return $res->withJson([
        'status'  => true,
        'message' => 'ok, put',
    ], 200)->withHeader('Content-type', 'application/json');
});

$app->post('/', function ($req, $res, $args = []) {
    return $res->withJson([
        'status'  => true,
        'message' => 'ok, post',
    ], 200)->withHeader('Content-type', 'application/json');
});

$app->delete('/', function ($req, $res, $args = []) {
    return $res->withJson([
        'status'  => true,
        'message' => 'ok, delete',
    ], 200)->withHeader('Content-type', 'application/json');
});

// Run app
$app->run();
