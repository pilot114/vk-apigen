<?php

namespace VkApigen\Method;

/**
 * Reposts (copies) an object to a user wall or community wall.
 */
class Wall_Repost extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.repost');
    }
    /**
     * ID of the object to be reposted on the wall. Example: "wall66748_3675"
     *
     * {"type":"string"}
     */
    public function object(string $object) : Wall_Repost
    {
        $this->params['object'] = $object;
        return $this;
    }
    /**
     * Comment to be added along with the reposted object.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Wall_Repost
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Target community ID when reposting to a community.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Wall_Repost
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool","default":0}
     */
    public function _mark_as_ads(bool $mark_as_ads) : Wall_Repost
    {
        $this->params['mark_as_ads'] = $mark_as_ads;
        return $this;
    }
}