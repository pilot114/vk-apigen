<?php

namespace VkApigen\Method;

/**
 * Allows to hide stories from chosen sources from current user's feed.
 */
class Stories_BanOwner extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.banOwner');
    }
    /**
     * List of sources IDs
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function owners_ids(array $owners_ids) : Stories_BanOwner
    {
        $this->params['owners_ids'] = $owners_ids;
        return $this;
    }
}