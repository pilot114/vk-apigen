<?php

namespace VkApigen\Method\Store;

/**
 * Нет описания
 */
class GetProducts extends \VkApigen\BaseMethod
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
        return $this->onCall('store.getProducts');
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _merchant(string $merchant) : self
    {
        $this->params['merchant'] = $merchant;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _section(string $section) : self
    {
        $this->params['section'] = $section;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _product_ids(array $product_ids) : self
    {
        $this->params['product_ids'] = $product_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _filters(array $filters) : self
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}