<?php

namespace VkApigen\Method;

/**
 * Returns categories list for communities catalog
 */
class Groups_GetCatalogInfo extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
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
    public function _extended(bool $extended) : Groups_GetCatalogInfo
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * 1 – to return subcategories info. By default: 0.
     *
     * {"type":"bool"}
     */
    public function _subcategories(bool $subcategories) : Groups_GetCatalogInfo
    {
        $this->params['subcategories'] = $subcategories;
        return $this;
    }
}