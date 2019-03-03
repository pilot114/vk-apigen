<?php

namespace VkApigen\Method;

/**
 * Returns an upload server address for a profile or community photo.
 */
class Photos_GetOwnerPhotoUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getOwnerPhotoUploadServer');
    }
    /**
     * identifier of a community or current user. "Note that community id must be negative. 'owner_id=1' – user, 'owner_id=-1' – community, "
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_GetOwnerPhotoUploadServer
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}