<?php

namespace VkApigen\Method\Groups;

/**
 * Returns invited users list of a community
 */
class GetInvitedUsers extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('groups.getInvitedUsers');
    }
    /**
     * Group ID to return invited users for.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
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
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":20}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * List of additional fields to be returned. Available values: 'sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, lists, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters'.
     *
     * {"type":"array","items":{"type":"string","enum":["sex","bdate","city","country","photo_50","photo_100","photo_200_orig","photo_200","photo_400_orig","photo_max","photo_max_orig","online","online_mobile","lists","domain","has_mobile","contacts","connections","site","education","universities","schools","can_post","can_see_all_posts","can_see_audio","can_write_private_message","status","last_seen","common_count","relation","relatives","counters"]}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname. Possible values: *'nom' — nominative (default),, *'gen' — genitive,, *'dat' — dative,, *'acc' — accusative, , *'ins' — instrumental,, *'abl' — prepositional.
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : self
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}