<?php

namespace VkApigen\Method\Messages;

/**
 * Нет описания
 */
class GetIntentUsers extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['group']);
    }
    public function call()
    {
        return $this->onCall('messages.getIntentUsers');
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["confirmed_notification","non_promo_newsletter","promo_newsletter"]}
     */
    public function intent(string $intent) : self
    {
        $this->params['intent'] = $intent;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100}
     */
    public function _subscribe_id(int $subscribe_id) : self
    {
        $this->params['subscribe_id'] = $subscribe_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":20,"minimum":0,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _name_case(array $name_case) : self
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}