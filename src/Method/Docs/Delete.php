<?php

namespace VkApigen\Method\Docs;

/**
 * Deletes a user or community document.
 */
class Delete extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('docs.delete');
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
}