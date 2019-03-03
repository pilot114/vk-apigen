<?php

namespace VkApigen\Method;

/**
 * Adds a link to user faves.
 */
class Fave_AddLink extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.addLink');
    }
    /**
     * Link URL.
     *
     * {"type":"string"}
     */
    public function link(string $link) : Fave_AddLink
    {
        $this->params['link'] = $link;
        return $this;
    }
    /**
     * Description text.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : Fave_AddLink
    {
        $this->params['text'] = $text;
        return $this;
    }
}