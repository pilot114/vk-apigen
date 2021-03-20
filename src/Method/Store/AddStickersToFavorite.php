<?php

namespace VkApigen\Method\Store;

/**
 * Adds given sticker IDs to the list of user's favorite stickers
 */
class AddStickersToFavorite extends \VkApigen\BaseMethod
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
        return $this->onCall('store.addStickersToFavorite');
    }
    /**
     * Sticker IDs to be added
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function sticker_ids(array $sticker_ids) : self
    {
        $this->params['sticker_ids'] = $sticker_ids;
        return $this;
    }
}