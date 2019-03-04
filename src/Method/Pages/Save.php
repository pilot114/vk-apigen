<?php

namespace VkApigen\Method\Pages;

/**
 * Saves the text of a wiki page.
 */
class Save extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('pages.save');
    }
    /**
     * Text of the wiki page in wiki-format.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : self
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * Wiki page ID. The 'title' parameter can be passed instead of 'pid'.
     *
     * {"type":"int"}
     */
    public function _page_id(int $page_id) : self
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Wiki page title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
}