<?php

namespace VkApigen\Method;

/**
 * Gets a list of comments for the page added through the [vk.com/dev/Comments|Comments widget].
 */
class Widgets_GetComments extends \VkApigen\BaseMethod
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
        return $this->onCall('widgets.getComments');
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _widget_api_id(int $widget_api_id) : Widgets_GetComments
    {
        $this->params['widget_api_id'] = $widget_api_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _url(string $url) : Widgets_GetComments
    {
        $this->params['url'] = $url;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _page_id(string $page_id) : Widgets_GetComments
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string","default":0}
     */
    public function _order(string $order) : Widgets_GetComments
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Widgets_GetComments
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":10,"default":10,"maximum":200}
     */
    public function _count(int $count) : Widgets_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
}