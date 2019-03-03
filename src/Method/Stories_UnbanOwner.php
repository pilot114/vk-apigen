<?php

namespace VkApigen\Method;

/**
 * Allows to show stories from hidden sources in current user's feed.
 */
class Stories_UnbanOwner extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.unbanOwner');
    }
    /**
     * List of hidden sources to show stories from.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function owners_ids(array $owners_ids) : Stories_UnbanOwner
    {
        $this->params['owners_ids'] = $owners_ids;
        return $this;
    }
}