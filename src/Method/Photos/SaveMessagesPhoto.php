<?php

namespace VkApigen\Method\Photos;

/**
 * Saves a photo after being successfully uploaded. URL obtained with [vk.com/dev/photos.getMessagesUploadServer|photos.getMessagesUploadServer] method.
 */
class SaveMessagesPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.saveMessagesPhoto');
    }
    /**
     * Parameter returned when the photo is [vk.com/dev/upload_files|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : self
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _server(int $server) : self
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _hash(string $hash) : self
    {
        $this->params['hash'] = $hash;
        return $this;
    }
}