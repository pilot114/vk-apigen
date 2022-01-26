<?php

namespace VkApigen\Method\Groups;

/**
 * Bind or unbind group's tag to user
 */
class TagBind extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.tagBind');
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
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":1,"maximum":2000000000,"entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Describe the action
     *
     * {"type":"string","enum":["bind","unbind"]}
     */
    public function act(string $act) : self
    {
        $this->params['act'] = $act;
        return $this;
    }
}