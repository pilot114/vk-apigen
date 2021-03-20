<?php

namespace VkApigen\Method\PrettyCards;

/**
 * Нет описания
 */
class Create extends \VkApigen\BaseMethod
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
        return $this->onCall('prettyCards.create');
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
     * {"type":"string"}
     */
    public function photo(string $photo) : self
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":2000}
     */
    public function link(string $link) : self
    {
        $this->params['link'] = $link;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":20}
     */
    public function _price(string $price) : self
    {
        $this->params['price'] = $price;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":20}
     */
    public function _price_old(string $price_old) : self
    {
        $this->params['price_old'] = $price_old;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":255}
     */
    public function _button(string $button) : self
    {
        $this->params['button'] = $button;
        return $this;
    }
}