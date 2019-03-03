<?php

namespace VkApigen\Method;

/**
 * Returns detailed information about user or community documents.
 */
class Docs_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('docs.get');
    }
    /**
     * Number of documents to return. By default, all documents.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : Docs_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of documents.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Docs_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * ID of the user or community that owns the documents. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Docs_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}