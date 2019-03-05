<?php

namespace VkApigen\Method\Database;

/**
 * Returns a list of faculties (i.e., university departments).
 */
class GetFaculties extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getFaculties');
    }
    /**
     * University ID.
     *
     * {"type":"int","minimum":0}
     */
    public function university_id(int $university_id) : self
    {
        $this->params['university_id'] = $university_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of faculties.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of faculties to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}