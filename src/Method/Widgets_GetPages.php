<?php

namespace VkApigen\Method;

/**
 * Gets a list of application/site pages where the [vk.com/dev/Comments|Comments widget] or [vk.com/dev/Like|Like widget] is installed.
 */
class Widgets_GetPages extends \VkApigen\BaseMethod
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
        return $this->onCall('widgets.getPages');
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _widget_api_id(int $widget_api_id) : Widgets_GetPages
    {
        $this->params['widget_api_id'] = $widget_api_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string","default":0}
     */
    public function _order(string $order) : Widgets_GetPages
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string","default":0}
     */
    public function _period(string $period) : Widgets_GetPages
    {
        $this->params['period'] = $period;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":10,"default":10,"maximum":200}
     */
    public function _count(int $count) : Widgets_GetPages
    {
        $this->params['count'] = $count;
        return $this;
    }
}