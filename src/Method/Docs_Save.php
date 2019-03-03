<?php

namespace VkApigen\Method;

/**
 * Saves a document after [vk.com/dev/upload_files_2|uploading it to a server].
 */
class Docs_Save extends \VkApigen\BaseMethod
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
        return $this->onCall('docs.save');
    }
    /**
     * This parameter is returned when the file is [vk.com/dev/upload_files_2|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function file(string $file) : Docs_Save
    {
        $this->params['file'] = $file;
        return $this;
    }
    /**
     * Document title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Docs_Save
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Document tags.
     *
     * {"type":"string"}
     */
    public function _tags(string $tags) : Docs_Save
    {
        $this->params['tags'] = $tags;
        return $this;
    }
}