<?php

namespace VkApigen\Method\PrettyCards;

/**
 * Нет описания
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
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('prettyCards.getById');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer"},"maxItems":10}
     */
    public function card_ids(array $card_ids) : self
    {
        $this->params['card_ids'] = $card_ids;
        return $this;
    }
}