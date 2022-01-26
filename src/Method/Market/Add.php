<?php

namespace VkApigen\Method\Market;

/**
 * Ads a new item to the market.
 */
class Add extends \VkApigen\BaseMethod
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
        return $this->onCall('market.add');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item name.
     *
     * {"type":"string","minLength":4,"maxLength":100}
     */
    public function name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Item description.
     *
     * {"type":"string","minLength":10}
     */
    public function description(string $description) : self
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Item category ID.
     *
     * {"type":"int","minimum":0}
     */
    public function category_id(int $category_id) : self
    {
        $this->params['category_id'] = $category_id;
        return $this;
    }
    /**
     * Item price.
     *
     * {"type":"float","minimum":0}
     */
    public function _price(float $price) : self
    {
        $this->params['price'] = $price;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float","minimum":0.01}
     */
    public function _old_price(float $old_price) : self
    {
        $this->params['old_price'] = $old_price;
        return $this;
    }
    /**
     * Item status ('1' — deleted, '0' — not deleted).
     *
     * {"type":"bool"}
     */
    public function _deleted(bool $deleted) : self
    {
        $this->params['deleted'] = $deleted;
        return $this;
    }
    /**
     * Cover photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _main_photo_id(int $main_photo_id) : self
    {
        $this->params['main_photo_id'] = $main_photo_id;
        return $this;
    }
    /**
     * IDs of additional photos.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":4}
     */
    public function _photo_ids(array $photo_ids) : self
    {
        $this->params['photo_ids'] = $photo_ids;
        return $this;
    }
    /**
     * Url for button in market item.
     *
     * {"type":"string","minLength":0,"maxLength":320}
     */
    public function _url(string $url) : self
    {
        $this->params['url'] = $url;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100000}
     */
    public function _dimension_width(int $dimension_width) : self
    {
        $this->params['dimension_width'] = $dimension_width;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100000}
     */
    public function _dimension_height(int $dimension_height) : self
    {
        $this->params['dimension_height'] = $dimension_height;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100000}
     */
    public function _dimension_length(int $dimension_length) : self
    {
        $this->params['dimension_length'] = $dimension_length;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100000000}
     */
    public function _weight(int $weight) : self
    {
        $this->params['weight'] = $weight;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":50}
     */
    public function _sku(string $sku) : self
    {
        $this->params['sku'] = $sku;
        return $this;
    }
}