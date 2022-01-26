<?php

include __DIR__ . '/auth.php';

function getItems(\VkApigen\BaseMethod $method): array
{
    $response = $method->call()->getBody()->getContents();
    return json_decode($response)->response->items ?? [];
}

function videos(string $q)
{
    $method = api()->video()->search()
        ->_adult(true)
        ->_sort(1)
        ->_count(200)
        ->_q($q);

    foreach (getItems($method) as $i => $item) {
        dump([
            $i + 1,
            "https://vk.com/id" . trim($item->owner_id, '-'),
            $item->title,
            date('Y.m.d. H:i:s', $item->date),
            $item->views . " просмотров",
            $item->image[0]->url . " фото",
            $item->player
        ]);
    }
}

function groups(string $q)
{
    $method = api()->groups()->search()
        ->_count(200)
        ->_type('group')
        ->q($q);

    foreach (getItems($method) as $i => $item) {
        dump([
            $i + 1,
            $item->id,
            $item->name,
            $item->is_closed,
            "https://vk.com/" . $item->screen_name,
            $item->photo_50,
        ]);
    }
}

//videos('Mr. Nobody');
groups('Блог');