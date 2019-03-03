<?php

namespace VkApigen\Method;

/**
 * Returns the data needed to query a Long Poll server for events
 */
class Groups_GetLongPollServer extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.getLongPollServer');
    }
    /**
     * Community ID
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_GetLongPollServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}