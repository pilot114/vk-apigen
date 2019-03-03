<?php

namespace VkApigen\Method;

/**
 * Edits an item.
 */
class Market_Edit extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
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
    public function owner_id(int $owner_id) : Market_Edit
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Market_Edit
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Item name.
     *
     * {"type":"string","minLength":4,"maxLength":100}
     */
    public function name(string $name) : Market_Edit
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Item description.
     *
     * {"type":"string","minLength":10}
     */
    public function description(string $description) : Market_Edit
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Item category ID.
     *
     * {"type":"int","minimum":0}
     */
    public function category_id(int $category_id) : Market_Edit
    {
        $this->params['category_id'] = $category_id;
        return $this;
    }
    /**
     * Item price.
     *
     * {"type":"float","minimum":0}
     */
    public function price(float $price) : Market_Edit
    {
        $this->params['price'] = $price;
        return $this;
    }
    /**
     * Item status ('1' — deleted, '0' — not deleted).
     *
     * {"type":"bool"}
     */
    public function _deleted(bool $deleted) : Market_Edit
    {
        $this->params['deleted'] = $deleted;
        return $this;
    }
    /**
     * Cover photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function main_photo_id(int $main_photo_id) : Market_Edit
    {
        $this->params['main_photo_id'] = $main_photo_id;
        return $this;
    }
    /**
     * IDs of additional photos.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":4}
     */
    public function _photo_ids(array $photo_ids) : Market_Edit
    {
        $this->params['photo_ids'] = $photo_ids;
        return $this;
    }
}