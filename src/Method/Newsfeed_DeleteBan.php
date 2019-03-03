<?php

namespace VkApigen\Method;

/**
 * Allows news from previously banned users and communities to be shown in the current user's newsfeed.
 */
class Newsfeed_DeleteBan extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.deleteBan');
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : Newsfeed_DeleteBan
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _group_ids(array $group_ids) : Newsfeed_DeleteBan
    {
        $this->params['group_ids'] = $group_ids;
        return $this;
    }
}