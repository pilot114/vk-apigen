<?php

namespace VkApigen\Method;

/**
 * Returns communities list for a catalog category.
 */
class Groups_GetCatalog extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.getCatalog');
    }
    /**
     * Category id received from [vk.com/dev/groups.getCatalogInfo|groups.getCatalogInfo].
     *
     * {"type":"int","minimum":0}
     */
    public function _category_id(int $category_id) : Groups_GetCatalog
    {
        $this->params['category_id'] = $category_id;
        return $this;
    }
    /**
     * Subcategory id received from [vk.com/dev/groups.getCatalogInfo|groups.getCatalogInfo].
     *
     * {"type":"int","minimum":0,"maximum":99}
     */
    public function _subcategory_id(int $subcategory_id) : Groups_GetCatalog
    {
        $this->params['subcategory_id'] = $subcategory_id;
        return $this;
    }
}