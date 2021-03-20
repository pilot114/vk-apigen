<?php

namespace VkApigen\Method\Fave;

/**
 * Нет описания
 */
class GetPages extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.getPages');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":10000}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":50,"minimum":1,"maximum":500}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["groups","hints","users"]}
     */
    public function _type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/base_user_group_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _tag_id(int $tag_id) : self
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
}