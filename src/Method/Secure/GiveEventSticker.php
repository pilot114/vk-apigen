<?php

namespace VkApigen\Method\Secure;

/**
 * Opens the game achievement and gives the user a sticker
 */
class GiveEventSticker extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['service']);
    }
    public function call()
    {
        return $this->onCall('secure.giveEventSticker');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function achievement_id(int $achievement_id) : self
    {
        $this->params['achievement_id'] = $achievement_id;
        return $this;
    }
}