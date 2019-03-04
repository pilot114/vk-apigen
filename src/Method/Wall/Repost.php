<?php

namespace VkApigen\Method\Wall;

/**
 * Reposts (copies) an object to a user wall or community wall.
 */
class Repost extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('wall.repost');
    }
    /**
     * ID of the object to be reposted on the wall. Example: "wall66748_3675"
     *
     * {"type":"string"}
     */
    public function object(string $object) : self
    {
        $this->params['object'] = $object;
        return $this;
    }
    /**
     * Comment to be added along with the reposted object.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Target community ID when reposting to a community.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _mark_as_ads(bool $mark_as_ads) : self
    {
        $this->params['mark_as_ads'] = $mark_as_ads;
        return $this;
    }
}