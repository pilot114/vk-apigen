<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Prevents news from specified users and communities from appearing in the current user's newsfeed.
 */
class AddBan extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('newsfeed.addBan');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _group_ids(array $group_ids) : self
    {
        $this->params['group_ids'] = $group_ids;
        return $this;
    }
}