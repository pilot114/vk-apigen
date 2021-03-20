<?php

namespace VkApigen\Method\Store;

/**
 * Removes given sticker IDs from the list of user's favorite stickers
 */
class RemoveStickersFromFavorite extends \VkApigen\BaseMethod
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
        return $this->onCall('store.removeStickersFromFavorite');
    }
    /**
     * Sticker IDs to be removed
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function sticker_ids(array $sticker_ids) : self
    {
        $this->params['sticker_ids'] = $sticker_ids;
        return $this;
    }
}