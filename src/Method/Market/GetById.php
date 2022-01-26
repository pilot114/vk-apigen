<?php

namespace VkApigen\Method\Market;

/**
 * Returns information about market items by their ids.
 */
class GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('market.getById');
    }
    /**
     * Comma-separated ids list: {user id}_{item id}. If an item belongs to a community -{community id} is used. " 'Videos' value example: , '-4363_136089719,13245770_137352259'"
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function item_ids(array $item_ids) : self
    {
        $this->params['item_ids'] = $item_ids;
        return $this;
    }
    /**
     * '1' - to return additional fields: 'likes, can_comment, car_repost, photos'. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}