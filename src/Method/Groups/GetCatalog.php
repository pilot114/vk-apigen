<?php

namespace VkApigen\Method\Groups;

/**
 * Returns communities list for a catalog category.
 */
class GetCatalog extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _category_id(int $category_id) : self
    {
        $this->params['category_id'] = $category_id;
        return $this;
    }
    /**
     * Subcategory id received from [vk.com/dev/groups.getCatalogInfo|groups.getCatalogInfo].
     *
     * {"type":"int","minimum":0,"maximum":99}
     */
    public function _subcategory_id(int $subcategory_id) : self
    {
        $this->params['subcategory_id'] = $subcategory_id;
        return $this;
    }
}