<?php

namespace VkApigen\Method;

/**
 * Returns information about photos by their IDs.
 */
class Photos_GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getById');
    }
    /**
     * IDs separated with a comma, that are IDs of users who posted photos and IDs of photos themselves with an underscore character between such IDs. To get information about a photo in the group album, you shall specify group ID instead of user ID. Example: "1_129207899,6492_135055734, , -20629724_271945303"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function photos(array $photos) : Photos_GetById
    {
        $this->params['photos'] = $photos;
        return $this;
    }
    /**
     * '1' — to return additional fields, '0' — (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Photos_GetById
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"bool"}
     */
    public function _photo_sizes(bool $photo_sizes) : Photos_GetById
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
}