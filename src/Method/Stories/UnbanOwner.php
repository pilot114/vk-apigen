<?php

namespace VkApigen\Method\Stories;

/**
 * Allows to show stories from hidden sources in current user's feed.
 */
class UnbanOwner extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('stories.unbanOwner');
    }
    /**
     * List of hidden sources to show stories from.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function owners_ids(array $owners_ids) : self
    {
        $this->params['owners_ids'] = $owners_ids;
        return $this;
    }
}