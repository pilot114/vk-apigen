<?php

namespace VkApigen\Method\Docs;

/**
 * Returns information about documents by their IDs.
 */
class GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('docs.getById');
    }
    /**
     * Document IDs. Example: , "66748_91488,66748_91455",
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function docs(array $docs) : self
    {
        $this->params['docs'] = $docs;
        return $this;
    }
}