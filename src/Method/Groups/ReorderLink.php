<?php

namespace VkApigen\Method\Groups;

/**
 * Allows to reorder links in the community.
 */
class ReorderLink extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.reorderLink');
    }
    /**
     * Community ID.
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link ID.
     *
     * {"type":"int","minimum":0}
     */
    public function link_id(int $link_id) : self
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * ID of the link after which to place the link with 'link_id'.
     *
     * {"type":"int","minimum":0}
     */
    public function _after(int $after) : self
    {
        $this->params['after'] = $after;
        return $this;
    }
}