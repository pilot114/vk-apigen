<?php

namespace VkApigen\Method\Apps;

/**
 * Нет описания
 */
class PromoHasActiveGift extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.promoHasActiveGift');
    }
    /**
     * Id of game promo action
     *
     * {"type":"int","minimum":0}
     */
    public function promo_id(int $promo_id) : self
    {
        $this->params['promo_id'] = $promo_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}