<?php

namespace VkApigen\Method\Fave;

/**
 * Нет описания
 */
class SetPageTags extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.setPageTags');
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Нет описания
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
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _tag_ids(array $tag_ids) : self
    {
        $this->params['tag_ids'] = $tag_ids;
        return $this;
    }
}