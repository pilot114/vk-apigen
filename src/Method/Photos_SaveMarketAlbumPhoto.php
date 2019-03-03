<?php

namespace VkApigen\Method;

/**
 * Saves market album photos after successful uploading.
 */
class Photos_SaveMarketAlbumPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.saveMarketAlbumPhoto');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Photos_SaveMarketAlbumPhoto
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : Photos_SaveMarketAlbumPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"int","minimum":0}
     */
    public function server(int $server) : Photos_SaveMarketAlbumPhoto
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function hash(string $hash) : Photos_SaveMarketAlbumPhoto
    {
        $this->params['hash'] = $hash;
        return $this;
    }
}