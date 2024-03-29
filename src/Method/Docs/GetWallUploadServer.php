<?php

namespace VkApigen\Method\Docs;

/**
 * Returns the server address for document upload onto a user's or community's wall.
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('docs.getWallUploadServer');
    }
    /**
     * Community ID (if the document will be uploaded to the community).
     *
     * {"type":"int","format":"int64","entity":"owner","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}