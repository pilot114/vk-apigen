<?php

namespace VkApigen\Method\Podcasts;

/**
 * Нет описания
 */
class SearchPodcast extends \VkApigen\BaseMethod
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
        return $this->onCall('podcasts.searchPodcast');
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function search_string(string $search_string) : self
    {
        $this->params['search_string'] = $search_string;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":20,"minimum":1,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}