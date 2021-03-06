<?php

namespace VkApigen\Method\Widgets;

/**
 * Gets a list of comments for the page added through the [vk.com/dev/Comments|Comments widget].
 */
class GetComments extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'service']);
    }
    public function call()
    {
        return $this->onCall('widgets.getComments');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _widget_api_id(int $widget_api_id) : self
    {
        $this->params['widget_api_id'] = $widget_api_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _url(string $url) : self
    {
        $this->params['url'] = $url;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _page_id(string $page_id) : self
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"date"}
     */
    public function _order(string $order) : self
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
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
     * {"type":"int","default":10,"minimum":10,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}