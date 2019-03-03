<?php

namespace VkApigen\Method;

/**
 * Allows to reorder links in the community.
 */
class Groups_ReorderLink extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.reorderLink');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_ReorderLink
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link ID.
     *
     * {"type":"int","minimum":0}
     */
    public function link_id(int $link_id) : Groups_ReorderLink
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * ID of the link after which to place the link with 'link_id'.
     *
     * {"type":"int","minimum":0}
     */
    public function _after(int $after) : Groups_ReorderLink
    {
        $this->params['after'] = $after;
        return $this;
    }
}