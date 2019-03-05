<?php

namespace VkApigen\Method\Stories;

/**
 * Allows to hide stories from chosen sources from current user's feed.
 */
class BanOwner extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.banOwner');
    }
    /**
     * List of sources IDs
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function owners_ids(array $owners_ids) : self
    {
        $this->params['owners_ids'] = $owners_ids;
        return $this;
    }
}