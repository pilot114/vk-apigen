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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
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
     * {"type":"string","default":0}
     */
    public function _order(string $order) : self
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":0}
     */
    public function _period(string $period) : self
    {
        $this->params['period'] = $period;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":10,"default":10,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}