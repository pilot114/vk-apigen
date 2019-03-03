<?php

namespace VkApigen\Method;

/**
 * Saves market photos after successful uploading.
 */
class Photos_SaveMarketPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.saveMarketPhoto');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Photos_SaveMarketPhoto
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : Photos_SaveMarketPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"int"}
     */
    public function server(int $server) : Photos_SaveMarketPhoto
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function hash(string $hash) : Photos_SaveMarketPhoto
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function _crop_data(string $crop_data) : Photos_SaveMarketPhoto
    {
        $this->params['crop_data'] = $crop_data;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function _crop_hash(string $crop_hash) : Photos_SaveMarketPhoto
    {
        $this->params['crop_hash'] = $crop_hash;
        return $this;
    }
}