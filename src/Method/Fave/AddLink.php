<?php

namespace VkApigen\Method\Fave;

/**
 * Adds a link to user faves.
 */
class AddLink extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function link(string $link) : self
    {
        $this->params['link'] = $link;
        return $this;
    }
    /**
     * Description text.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : self
    {
        $this->params['text'] = $text;
        return $this;
    }
}