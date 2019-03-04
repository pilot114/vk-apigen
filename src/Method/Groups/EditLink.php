<?php

namespace VkApigen\Method\Groups;

/**
 * Allows to edit a link in the community.
 */
class EditLink extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link ID.
     *
     * {"type":"int","minimum":0}
     */
    public function link_id(int $link_id) : self
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * New description text for the link.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : self
    {
        $this->params['text'] = $text;
        return $this;
    }
}