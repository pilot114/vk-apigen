<?php

namespace VkApigen\Method\Wall;

/**
 * Нет описания
 */
class CloseComments extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.closeComments');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}