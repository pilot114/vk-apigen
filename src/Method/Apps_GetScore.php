<?php

namespace VkApigen\Method;

/**
 * Returns user score in app
 */
class Apps_GetScore extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.getScore');
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Apps_GetScore
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}