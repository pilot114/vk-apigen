<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Returns a list of newsfeeds followed by the current user.
 */
class GetLists extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
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
    public function _list_ids(array $list_ids) : self
    {
        $this->params['list_ids'] = $list_ids;
        return $this;
    }
    /**
     * Return additional list info
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}