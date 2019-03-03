<?php

namespace VkApigen;

/**
 * Это класс не генерится автоматически!
 * Базовый класс для самих методов
 *
 * $client - Guzzle client
 */
abstract class BaseMethod
{
    protected $client;
    protected $params;
    protected $defaultQuery;

    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }

    /**
     * @param $method
     * @return \GuzzleHttp\Psr7\Response
     */
    protected function onCall($method)
    {
        $params = array_merge($this->defaultQuery, $this->params);
        return $this->client->get($method, ['query' => $params]);
    }
}