<?php

/**
 * Генерация классов для работы с vk api
 */

include '../vendor/autoload.php';
include './Printer.php';

$generateNamespace = 'VkApigen';
$generatePath = '../src';
$vkDefinitionPath = '../vendor/vkcom/vk-api-schema';

$apiVersion = json_decode(file_get_contents($vkDefinitionPath . '/package.json'), true)['version'];

$methods   = json_decode(file_get_contents($vkDefinitionPath . '/methods.json'), true)['methods'];
// используются в классах методов
$responses = json_decode(file_get_contents($vkDefinitionPath . '/responses.json'), true)['definitions'];
$objects   = json_decode(file_get_contents($vkDefinitionPath . '/objects.json'), true)['definitions'];

$printer = new Printer($generateNamespace, $apiVersion);

// Генерация основного класса для работы с апи
file_put_contents($generatePath . '/Api.php', $printer->apiPrint($methods));

// Генерация классов доменов методов (т.е. разделы апи - user, photo, wall и т.д.)
if (!is_dir($generatePath . '/Domain')) {
    mkdir($generatePath . '/Domain');
}

foreach ($printer->domainsPrint($methods) as $className => $source) {
    file_put_contents(sprintf($generatePath . '/Domain/%s.php', $className), $source);
}

if (!is_dir($generatePath . '/Method')) {
    mkdir($generatePath . '/Method');
}
foreach ($printer->methodsPrint($methods, $responses, $objects) as $key => $source) {
    list($domain, $className) = explode('_', $key);
    if (!is_dir($generatePath . '/Method/' . $domain)) {
        mkdir($generatePath . '/Method/' . $domain);
    }
    file_put_contents(sprintf($generatePath . '/Method/%s/%s.php', $domain, $className), $source);
}


