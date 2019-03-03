<?php

namespace VkApigen\Method;

/**
 * Removes link from the user's faves.
 */
class Fave_RemoveLink extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.removeLink');
    }
    /**
     * Link ID (can be obtained by [vk.com/dev/faves.getLinks|faves.getLinks] method).
     *
     * {"type":"string"}
     */
    public function link_id(string $link_id) : Fave_RemoveLink
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
}