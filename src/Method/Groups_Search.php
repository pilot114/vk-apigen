<?php

namespace VkApigen\Method;

/**
 * Returns a list of communities matching the search criteria.
 */
class Groups_Search extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.search');
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function q(string $q) : Groups_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Community type. Possible values: 'group, page, event.'
     *
     * {"type":"string","enum":["group","page","event"]}
     */
    public function _type(string $type) : Groups_Search
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Country ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _country_id(int $country_id) : Groups_Search
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * City ID. If this parameter is transmitted, country_id is ignored.
     *
     * {"type":"int","minimum":0}
     */
    public function _city_id(int $city_id) : Groups_Search
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * '1' — to return only upcoming events. Works with the 'type' = 'event' only.
     *
     * {"type":"bool"}
     */
    public function _future(bool $future) : Groups_Search
    {
        $this->params['future'] = $future;
        return $this;
    }
    /**
     * '1' — to return communities with enabled market only.
     *
     * {"type":"bool"}
     */
    public function _market(bool $market) : Groups_Search
    {
        $this->params['market'] = $market;
        return $this;
    }
    /**
     * Sort order. Possible values: *'0' — default sorting (similar the full version of the site),, *'1' — by growth speed,, *'2'— by the "day attendance/members number" ratio,, *'3' — by the "Likes number/members number" ratio,, *'4' — by the "comments number/members number" ratio,, *'5' — by the "boards entries number/members number" ratio.
     *
     * {"type":"int","enum":[0,1,2,3,4,5],"enumNames":["default","growth","attendance","likes","comments","entries"]}
     */
    public function _sort(int $sort) : Groups_Search
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Groups_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of communities to return. "Note that you can not receive more than first thousand of results, regardless of 'count' and 'offset' values."
     *
     * {"type":"int","minimum":0,"default":20,"maximum":1000}
     */
    public function _count(int $count) : Groups_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
}