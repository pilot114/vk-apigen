<?php

namespace VkApigen\Method\Fave;

/**
 * Нет описания
 */
class Get extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.get');
    }
    /**
     * '1' — to return additional 'wall', 'profiles', and 'groups' fields. By default: '0'.
     *
     * {"type":"bool","default":false}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["article","clip","link","narrative","page","podcast","post","product","video","youla_product"]}
     */
    public function _item_type(string $item_type) : self
    {
        $this->params['item_type'] = $item_type;
        return $this;
    }
    /**
     * Tag ID.
     *
     * {"type":"int"}
     */
    public function _tag_id(int $tag_id) : self
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of users.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of users to return.
     *
     * {"type":"int","default":50,"minimum":1,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(string $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _is_from_snackbar(bool $is_from_snackbar) : self
    {
        $this->params['is_from_snackbar'] = $is_from_snackbar;
        return $this;
    }
}