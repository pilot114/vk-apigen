<?php

namespace VkApigen\Method\Market;

/**
 * Returns items album's data
 */
class GetAlbumById extends \VkApigen\BaseMethod
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
        return $this->onCall('market.getAlbumById');
    }
    /**
     * identifier of an album owner community, "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * collections identifiers to obtain data from
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function album_ids(array $album_ids) : self
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
}