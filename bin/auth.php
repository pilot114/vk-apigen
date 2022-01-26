<?php

include __DIR__ . '/../vendor/autoload.php';

function xr($string, $key) {
    for($i = 0; $i < strlen($string); $i++)
        $string[$i] = ($string[$i] ^ $key[$i % strlen($key)]);
    return $string;
}

// Authorization Code Flow ключ пользователя
// https://oauth.vk.com/authorize?client_id=4664424&display=page&redirect_uri=http://85.143.173.144/callback&scope=4095&response_type=code&v=5.130
// https://oauth.vk.com/access_token?client_id=4664424&client_secret=***&redirect_uri=http://85.143.173.144/callback&code=15dfb2834042aaefea

//$raw = '';
//die(base64_encode(xr($raw, $masterPass)));

function api () {
    // FILL DEFAULT
    $masterPass = '';
    $hashed = 'TU5NAwtsamxLGksIA29vO05IG1JROzlpTxkcB1doPTkbTksHAGNgaEMeSwZQY2w+SklIAwZrPG9NThgJA2g5YxlNSwNSPGE4GR5KV1Zoaj4bG0lTBw==';
    $accessToken = xr(base64_decode($hashed), $masterPass);
    return new \VkApigen\Api($accessToken, 'user');
}
