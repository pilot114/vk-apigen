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
    public function link_id(string $link_id) : self
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
}