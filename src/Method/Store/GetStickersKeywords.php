<?php

namespace VkApigen\Method\Store;

/**
 * Нет описания
 */
class GetStickersKeywords extends \VkApigen\BaseMethod
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
        return $this->onCall('store.getStickersKeywords');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _stickers_ids(array $stickers_ids) : self
    {
        $this->params['stickers_ids'] = $stickers_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _products_ids(array $products_ids) : self
    {
        $this->params['products_ids'] = $products_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":true}
     */
    public function _aliases(bool $aliases) : self
    {
        $this->params['aliases'] = $aliases;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _all_products(bool $all_products) : self
    {
        $this->params['all_products'] = $all_products;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":true}
     */
    public function _need_stickers(bool $need_stickers) : self
    {
        $this->params['need_stickers'] = $need_stickers;
        return $this;
    }
}