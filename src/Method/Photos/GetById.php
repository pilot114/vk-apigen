<?php

namespace VkApigen\Method\Photos;

/**
 * Returns information about photos by their IDs.
 */
class GetById extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
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
    public function photos(array $photos) : self
    {
        $this->params['photos'] = $photos;
        return $this;
    }
    /**
     * '1' — to return additional fields, '0' — (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"bool"}
     */
    public function _photo_sizes(bool $photo_sizes) : self
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
}