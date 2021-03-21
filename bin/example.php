<?php

include '../vendor/autoload.php';

function xr($string, $key) {
    for($i = 0; $i < strlen($string); $i++)
        $string[$i] = ($string[$i] ^ $key[$i % strlen($key)]);
    return $string;
}

// Authorization Code Flow ключ пользователя
// https://oauth.vk.com/authorize?client_id=4664424&display=page&redirect_uri=http://85.143.221.59/callback&scope=4095&response_type=code&v=5.130
// https://oauth.vk.com/access_token?client_id=4664424&client_secret=***&redirect_uri=http://85.143.221.59/callback&code=15dfb2834042aaefea

// FILL DEFAULT
$masterPass = '';
$accessToken = xr(base64_decode('Qh1ICQBoPT8bT0wHATxgb0hNTwUKPGFtH0sYBgc7PWwZG04CUD9rbUpOSVIGOT5uSUpIBgBqbG9KSR4DUG45bUxLSwVSbDxjSBtPBwZoa20eSx9VBQ=='), $masterPass);

$vk = new \VkApigen\Api($accessToken, 'user');

$response = $vk->streaming()->


$response = $vk->video()->search()->_adult(true)->_sort(1)->_count(200)
    ->q('Mr. Nobody')
    ->call()
    ->getBody()->getContents();
$response = (json_decode($response)->response);

foreach ($response->items as $i => $item) {
    echo $i + 1 . " ###\n";
    echo "https://vk.com/id" . trim($item->owner_id, '-') . "\n";
    echo $item->title . "\n";
    echo date('Y.m.d. H:i:s', $item->date) . "\n";
    echo $item->views . " просмотров\n";
    echo $item->image[0]->url . " фото\n";
    echo $item->player . "\n\n";
}
