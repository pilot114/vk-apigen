<?php

namespace VkApigen\Method\Photos;

/**
 * Returns the server address for photo upload onto a user's wall.
 */
class GetWallUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getWallUploadServer');
    }
    /**
     * ID of community to whose wall the photo will be uploaded.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}