<?php

namespace VkApigen\Method\Pages;

/**
 * Returns HTML representation of the wiki markup.
 */
class ParseWiki extends \VkApigen\BaseMethod
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
        return $this->onCall('pages.parseWiki');
    }
    /**
     * Text of the wiki page.
     *
     * {"type":"string"}
     */
    public function text(string $text) : self
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * ID of the group in the context of which this markup is interpreted.
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}