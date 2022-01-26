<?php

namespace VkApigen\Method\Docs;

/**
 * Returns detailed information about user or community documents.
 */
class Get extends \VkApigen\BaseMethod
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
        return $this->onCall('docs.get');
    }
    /**
     * Number of documents to return. By default, all documents.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of documents.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0,"enum":[0,1,2,3,4,5,6,7,8],"enumNames":["all","text","archive","gif","image","audio","video","ebook","default"]}
     */
    public function _type(int $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * ID of the user or community that owns the documents. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":false}
     */
    public function _return_tags(bool $return_tags) : self
    {
        $this->params['return_tags'] = $return_tags;
        return $this;
    }
}