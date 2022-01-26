<?php

namespace VkApigen\Method\Groups;

/**
 * Add new group's tag
 */
class TagAdd extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.tagAdd');
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
     * {"type":"string","maxLength":20}
     */
    public function tag_name(string $tag_name) : self
    {
        $this->params['tag_name'] = $tag_name;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["454647","45678f","4bb34b","5181b8","539b9c","5c9ce6","63b9ba","6bc76b","76787a","792ec0","7a6c4f","7ececf","9e8d6b","a162de","aaaeb3","bbaa84","e64646","ff5c5c","ffa000","ffc107"]}
     */
    public function _tag_color(string $tag_color) : self
    {
        $this->params['tag_color'] = $tag_color;
        return $this;
    }
}