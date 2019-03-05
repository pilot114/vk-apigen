<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Creates and edits user newsfeed lists
 */
class SaveList extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.saveList');
    }
    /**
     * numeric list identifier (if not sent, will be set automatically).
     *
     * {"type":"int","minimum":0}
     */
    public function _list_id(int $list_id) : self
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
    /**
     * list name.
     *
     * {"type":"string"}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * users and communities identifiers to be added to the list. Community identifiers must be negative numbers.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _source_ids(array $source_ids) : self
    {
        $this->params['source_ids'] = $source_ids;
        return $this;
    }
    /**
     * reposts display on and off ('1' is for off).
     *
     * {"type":"bool"}
     */
    public function _no_reposts(bool $no_reposts) : self
    {
        $this->params['no_reposts'] = $no_reposts;
        return $this;
    }
}