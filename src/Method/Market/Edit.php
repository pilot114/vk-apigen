<?php

namespace VkApigen\Method\Market;

/**
 * Edits an item.
 */
class Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('market.edit');
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
     * Item ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : self
    {
        $this->params['item_id'] = $item_id;
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
}