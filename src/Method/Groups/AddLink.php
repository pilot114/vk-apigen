<?php

namespace VkApigen\Method\Groups;

/**
 * Allows to add a link to the community.
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
        return $this->onCall('groups.addLink');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
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
     * Description text for the link.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : self
    {
        $this->params['text'] = $text;
        return $this;
    }
}