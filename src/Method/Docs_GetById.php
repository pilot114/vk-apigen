<?php

namespace VkApigen\Method;

/**
 * Returns information about documents by their IDs.
 */
class Docs_GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('docs.getById');
    }
    /**
     * Document IDs. Example: , "66748_91488,66748_91455",
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function docs(array $docs) : Docs_GetById
    {
        $this->params['docs'] = $docs;
        return $this;
    }
}