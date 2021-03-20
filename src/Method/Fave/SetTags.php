<?php

namespace VkApigen\Method\Fave;

/**
 * Нет описания
 */
class SetTags extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.setTags');
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["article","clip","link","narrative","page","podcast","post","product","video"]}
     */
    public function _item_type(string $item_type) : self
    {
        $this->params['item_type'] = $item_type;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _item_owner_id(int $item_owner_id) : self
    {
        $this->params['item_owner_id'] = $item_owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _item_id(int $item_id) : self
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _tag_ids(array $tag_ids) : self
    {
        $this->params['tag_ids'] = $tag_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _link_id(string $link_id) : self
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _link_url(string $link_url) : self
    {
        $this->params['link_url'] = $link_url;
        return $this;
    }
}