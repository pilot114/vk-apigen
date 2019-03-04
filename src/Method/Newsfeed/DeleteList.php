<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Нет описания
 */
class DeleteList extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('newsfeed.deleteList');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function list_id(int $list_id) : self
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
}