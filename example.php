<?php

include 'vendor/autoload.php';

// https://github.com/search?q=vk+access_token&type=Code ;-)
$accessToken = '33be01cf14cf4e807b075601e45972657fd2c7fd532da9e20a1b641f85b6c4a4bb22ff38b71167321b02b';
$vk = new \VkApigen\Api($accessToken);

$response = $vk->apps()->getCatalog()->_q('комикс')
    ->call()
    ->getBody()->getContents();

var_dump(json_decode($response));
