<?php

namespace VkApigen\Method;

/**
 * Returns Long Poll notification settings
 */
class Groups_GetLongPollSettings extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.getLongPollSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_GetLongPollSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}