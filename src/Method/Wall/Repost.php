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
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
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
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":false}
     */
    public function _mark_as_ads(bool $mark_as_ads) : self
    {
        $this->params['mark_as_ads'] = $mark_as_ads;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _mute_notifications(bool $mute_notifications) : self
    {
        $this->params['mute_notifications'] = $mute_notifications;
        return $this;
    }
}