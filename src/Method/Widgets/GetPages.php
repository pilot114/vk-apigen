<?php

namespace VkApigen\Method\Widgets;

/**
 * Gets a list of application/site pages where the [vk.com/dev/Comments|Comments widget] or [vk.com/dev/Like|Like widget] is installed.
 */
class GetPages extends \VkApigen\BaseMethod
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
        return $this->onCall('widgets.getPages');
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
     * {"type":"string","default":"friend_likes"}
     */
    public function _order(string $order) : self
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"week"}
     */
    public function _period(string $period) : self
    {
        $this->params['period'] = $period;
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