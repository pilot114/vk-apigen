<?php

namespace VkApigen\Method;

/**
 * Allows to edit a link in the community.
 */
class Groups_EditLink extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.editLink');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_EditLink
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link ID.
     *
     * {"type":"int","minimum":0}
     */
    public function link_id(int $link_id) : Groups_EditLink
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * New description text for the link.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : Groups_EditLink
    {
        $this->params['text'] = $text;
        return $this;
    }
}