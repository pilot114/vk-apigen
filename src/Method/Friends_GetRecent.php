<?php

namespace VkApigen\Method;

/**
 * Returns a list of user IDs of the current user's recently added friends.
 */
class Friends_GetRecent extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getRecent');
    }
    /**
     * Number of recently added friends to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : Friends_GetRecent
    {
        $this->params['count'] = $count;
        return $this;
    }
}