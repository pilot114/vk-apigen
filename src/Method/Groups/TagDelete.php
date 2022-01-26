<?php

namespace VkApigen\Method\Groups;

/**
 * Delete group's tag
 */
class TagDelete extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('groups.tagDelete');
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function tag_id(int $tag_id) : self
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
}