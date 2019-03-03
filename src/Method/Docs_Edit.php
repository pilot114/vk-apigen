<?php

namespace VkApigen\Method;

/**
 * Edits a document.
 */
class Docs_Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('docs.edit');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Docs_Edit
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Document ID.
     *
     * {"type":"int","minimum":0}
     */
    public function doc_id(int $doc_id) : Docs_Edit
    {
        $this->params['doc_id'] = $doc_id;
        return $this;
    }
    /**
     * Document title.
     *
     * {"type":"string","maxLength":128}
     */
    public function _title(string $title) : Docs_Edit
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Document tags.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _tags(array $tags) : Docs_Edit
    {
        $this->params['tags'] = $tags;
        return $this;
    }
}