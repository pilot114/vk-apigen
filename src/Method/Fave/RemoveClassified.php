<?php

namespace VkApigen\Method\Fave;

/**
 * Removes link from the user's faves.
 */
class RemoveClassified extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('fave.removeClassified');
    }
    /**
     * Classifieds item source
     *
     * {"type":"string","enum":["youla"]}
     */
    public function item_source(string $item_source) : self
    {
        $this->params['item_source'] = $item_source;
        return $this;
    }
    /**
     * Classifieds item id
     *
     * {"type":"string"}
     */
    public function item_id(string $item_id) : self
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}