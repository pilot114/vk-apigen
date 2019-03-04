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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('docs.getWallUploadServer');
    }
    /**
     * Community ID (if the document will be uploaded to the community).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}