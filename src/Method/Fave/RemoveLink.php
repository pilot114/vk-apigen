<?php

namespace VkApigen\Method\Fave;

/**
 * Removes link from the user's faves.
 */
class RemoveLink extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user']);
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
    public function _link_id(string $link_id) : self
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * Link URL
     *
     * {"type":"string"}
     */
    public function _link(string $link) : self
    {
        $this->params['link'] = $link;
        return $this;
    }
}