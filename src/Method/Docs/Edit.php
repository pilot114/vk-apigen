<?php

namespace VkApigen\Method\Docs;

/**
 * Edits a document.
 */
class Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('docs.edit');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
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
     * Document title.
     *
     * {"type":"string","maxLength":128}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Document tags.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _tags(array $tags) : self
    {
        $this->params['tags'] = $tags;
        return $this;
    }
}