<?php

namespace VkApigen\Method\Groups;

/**
 * Returns categories list for communities catalog
 */
class GetCatalogInfo extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('groups.getCatalogInfo');
    }
    /**
     * 1 – to return communities count and three communities for preview. By default: 0.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * 1 – to return subcategories info. By default: 0.
     *
     * {"type":"bool"}
     */
    public function _subcategories(bool $subcategories) : self
    {
        $this->params['subcategories'] = $subcategories;
        return $this;
    }
}