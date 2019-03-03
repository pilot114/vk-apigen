<?php

namespace VkApigen\Method;

/**
 * not description
 */
class Newsfeed_DeleteList extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.deleteList');
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function list_id(int $list_id) : Newsfeed_DeleteList
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
}