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
     * {"type":"int"}
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
    public function price(float $price) : self
    {
        $this->params['price'] = $price;
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
    public function main_photo_id(int $main_photo_id) : self
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
}