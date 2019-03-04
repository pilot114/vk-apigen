<?php

namespace VkApigen\Method\Groups;

/**
 * With this method you can join the group or public page, and also confirm your participation in an event.
 */
class Join extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('groups.join');
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Optional parameter which is taken into account when 'gid' belongs to the event: '1' — Perhaps I will attend, '0' — I will be there for sure (default), ,
     *
     * {"type":"string"}
     */
    public function _not_sure(string $not_sure) : self
    {
        $this->params['not_sure'] = $not_sure;
        return $this;
    }
}