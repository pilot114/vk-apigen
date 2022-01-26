<?php

namespace VkApigen\Method\Photos;

/**
 * Adds a tag on the photo.
 */
class PutTag extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.putTag');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function photo_id(int $photo_id) : self
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * ID of the user to be tagged.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Upper left-corner coordinate of the tagged area (as a percentage of the photo's width).
     *
     * {"type":"float"}
     */
    public function _x(float $x) : self
    {
        $this->params['x'] = $x;
        return $this;
    }
    /**
     * Upper left-corner coordinate of the tagged area (as a percentage of the photo's height).
     *
     * {"type":"float"}
     */
    public function _y(float $y) : self
    {
        $this->params['y'] = $y;
        return $this;
    }
    /**
     * Lower right-corner coordinate of the tagged area (as a percentage of the photo's width).
     *
     * {"type":"float"}
     */
    public function _x2(float $x2) : self
    {
        $this->params['x2'] = $x2;
        return $this;
    }
    /**
     * Lower right-corner coordinate of the tagged area (as a percentage of the photo's height).
     *
     * {"type":"float"}
     */
    public function _y2(float $y2) : self
    {
        $this->params['y2'] = $y2;
        return $this;
    }
}