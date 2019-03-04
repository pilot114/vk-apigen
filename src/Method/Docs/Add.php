<?php

namespace VkApigen\Method\Docs;

/**
 * Copies a document to a user's or community's document list.
 */
class Add extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('docs.add');
    }
    /**
     * ID of the user or community that owns the document. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Document ID.
     *
     * {"type":"int","minimum":0}
     */
    public function doc_id(int $doc_id) : self
    {
        $this->params['doc_id'] = $doc_id;
        return $this;
    }
    /**
     * Access key. This parameter is required if 'access_key' was returned with the document's data.
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : self
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
}