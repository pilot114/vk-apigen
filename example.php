<?php

include 'vendor/autoload.php';

// https://vk.com/dev/access_token
// https://github.com/search?q=vk+access_token&type=Code ;-)
$accessToken = '33be01cf14cf4e807b075601e45972657fd2c7fd532da9e20a1b641f85b6c4a4bb22ff38b71167321b02b';
$vk = new \VkApigen\Api($accessToken, 'user');

$response = $vk->video()->search()->_adult(true)->_sort(1)->_count(200)
        ->q('Mr. Nobody')
    ->call()
    ->getBody()->getContents();

/*
$items = array_filter($items, function($item) {
    return (time() - $item->duration) < 600;
});
*/

foreach (array_reverse(array_values($items)) as $i => $item) {
    echo $i+1 . " ###\n";
    echo "https://vk.com/id" . trim($item->owner_id, '-') . "\n";
    echo $item->title . "\n";
    echo date('Y.m.d. H:i:s', $item->date) . "\n";
    echo $item->views . " просмотров\n";
    echo $item->photo_800 . " фото\n";
    echo $item->player . "\n\n";
}
