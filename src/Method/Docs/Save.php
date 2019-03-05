<?php

namespace VkApigen\Method\Docs;

/**
 * Saves a document after [vk.com/dev/upload_files_2|uploading it to a server].
 */
class Save extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
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
    public function file(string $file) : self
    {
        $this->params['file'] = $file;
        return $this;
    }
    /**
     * Document title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Document tags.
     *
     * {"type":"string"}
     */
    public function _tags(string $tags) : self
    {
        $this->params['tags'] = $tags;
        return $this;
    }
}