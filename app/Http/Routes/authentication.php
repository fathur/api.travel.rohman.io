<?php

$app->post('auth/login', []);
$app->post('auth/register', []);
$app->post('auth/password/forgot', []);

$app->get('queue',  [
    'uses' => 'QueueController@index',
    'as' => 'queue.index'
]);