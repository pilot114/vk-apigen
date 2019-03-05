<?php

namespace VkApigen\Method\Database;

/**
 * Returns list of chairs on a specified faculty.
 */
class GetChairs extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('database.getChairs');
    }
    /**
     * id of the faculty to get chairs from
     *
     * {"type":"int","minimum":0}
     */
    public function faculty_id(int $faculty_id) : self
    {
        $this->params['faculty_id'] = $faculty_id;
        return $this;
    }
    /**
     * offset required to get a certain subset of chairs
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * amount of chairs to get
     *
     * {"type":"int","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}