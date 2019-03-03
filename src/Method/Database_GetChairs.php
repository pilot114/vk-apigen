<?php

namespace VkApigen\Method;

/**
 * Returns list of chairs on a specified faculty.
 */
class Database_GetChairs extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
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
    public function faculty_id(int $faculty_id) : Database_GetChairs
    {
        $this->params['faculty_id'] = $faculty_id;
        return $this;
    }
    /**
     * offset required to get a certain subset of chairs
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Database_GetChairs
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * amount of chairs to get
     *
     * {"type":"int","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(int $count) : Database_GetChairs
    {
        $this->params['count'] = $count;
        return $this;
    }
}