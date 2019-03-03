<?php

namespace VkApigen\Method;

/**
 * Adds a tag on the photo.
 */
class Photos_PutTag extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.putTag');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : Photos_PutTag
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function photo_id(int $photo_id) : Photos_PutTag
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * ID of the user to be tagged.
     *
     * {"type":"int"}
     */
    public function user_id(int $user_id) : Photos_PutTag
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Upper left-corner coordinate of the tagged area (as a percentage of the photo's width).
     *
     * {"type":"float"}
     */
    public function _x(float $x) : Photos_PutTag
    {
        $this->params['x'] = $x;
        return $this;
    }
    /**
     * Upper left-corner coordinate of the tagged area (as a percentage of the photo's height).
     *
     * {"type":"float"}
     */
    public function _y(float $y) : Photos_PutTag
    {
        $this->params['y'] = $y;
        return $this;
    }
    /**
     * Lower right-corner coordinate of the tagged area (as a percentage of the photo's width).
     *
     * {"type":"float"}
     */
    public function _x2(float $x2) : Photos_PutTag
    {
        $this->params['x2'] = $x2;
        return $this;
    }
    /**
     * Lower right-corner coordinate of the tagged area (as a percentage of the photo's height).
     *
     * {"type":"float"}
     */
    public function _y2(float $y2) : Photos_PutTag
    {
        $this->params['y2'] = $y2;
        return $this;
    }
}