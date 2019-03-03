<?php

namespace VkApigen\Method;

/**
 * Returns a list of newsfeeds followed by the current user.
 */
class Newsfeed_GetLists extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.getLists');
    }
    /**
     * numeric list identifiers.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _list_ids(array $list_ids) : Newsfeed_GetLists
    {
        $this->params['list_ids'] = $list_ids;
        return $this;
    }
    /**
     * Return additional list info
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Newsfeed_GetLists
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}