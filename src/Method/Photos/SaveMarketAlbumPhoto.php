<?php

namespace VkApigen\Method\Photos;

/**
 * Saves market album photos after successful uploading.
 */
class SaveMarketAlbumPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.saveMarketAlbumPhoto');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : self
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"int","minimum":0}
     */
    public function server(int $server) : self
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function hash(string $hash) : self
    {
        $this->params['hash'] = $hash;
        return $this;
    }
}