<?php

namespace VkApigen\Method\Groups;

/**
 * Returns a list of community members.
 */
class GetMembers extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group', 'service']);
    }
    public function call()
    {
        return $this->onCall('groups.getMembers');
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"string"}
     */
    public function _group_id(string $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Sort order. Available values: 'id_asc', 'id_desc', 'time_asc', 'time_desc'. 'time_asc' and 'time_desc' are availavle only if the method is called by the group's 'moderator'.
     *
     * {"type":"string","default":"id_asc","enum":["id_asc","id_desc","time_asc","time_desc"]}
     */
    public function _sort(string $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of community members.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of community members to return.
     *
     * {"type":"int","default":1000,"minimum":0}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * List of additional fields to be returned. Available values: 'sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, lists, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters'.
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * *'friends' – only friends in this community will be returned,, *'unsure' – only those who pressed 'I may attend' will be returned (if it's an event).
     *
     * {"type":"string","enum":["friends","unsure","managers","donut"]}
     */
    public function _filter(string $filter) : self
    {
        $this->params['filter'] = $filter;
        return $this;
    }
}