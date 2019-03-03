<?php

namespace VkApigen\Method;

/**
 * Allows to add a link to the community.
 */
class Groups_AddLink extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.addLink');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_AddLink
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link URL.
     *
     * {"type":"string"}
     */
    public function link(string $link) : Groups_AddLink
    {
        $this->params['link'] = $link;
        return $this;
    }
    /**
     * Description text for the link.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : Groups_AddLink
    {
        $this->params['text'] = $text;
        return $this;
    }
}