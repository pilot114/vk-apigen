<?php

namespace VkApigen\Method\Market;

/**
 * Searches market items in a community's catalog
 */
class Search extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('market.search');
    }
    /**
     * ID of an items owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Search query, for example "pink slippers".
     *
     * {"type":"string"}
     */
    public function _q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Minimum item price value.
     *
     * {"type":"int","minimum":0}
     */
    public function _price_from(int $price_from) : self
    {
        $this->params['price_from'] = $price_from;
        return $this;
    }
    /**
     * Maximum item price value.
     *
     * {"type":"int","minimum":0}
     */
    public function _price_to(int $price_to) : self
    {
        $this->params['price_to'] = $price_to;
        return $this;
    }
    /**
     * Comma-separated tag IDs list.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _tags(array $tags) : self
    {
        $this->params['tags'] = $tags;
        return $this;
    }
    /**
     * '0' — do not use reverse order, '1' — use reverse order
     *
     * {"type":"int","minimum":0,"default":1,"enum":[0,1],"enumNames":["normal","reverse"]}
     */
    public function _rev(int $rev) : self
    {
        $this->params['rev'] = $rev;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' – to return additional fields: 'likes, can_comment, car_repost, photos'. By default: '0'.
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}