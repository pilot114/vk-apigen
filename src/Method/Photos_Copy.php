<?php

namespace VkApigen\Method;

/**
 * Allows to copy a photo to the "Saved photos" album
 */
class Photos_Copy extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.copy');
    }
    /**
     * photo's owner ID
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Photos_Copy
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * photo ID
     *
     * {"type":"int","minimum":0}
     */
    public function photo_id(int $photo_id) : Photos_Copy
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * for private photos
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Photos_Copy
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
}