<?php

namespace VkApigen\Method;

/**
 * Creates and edits user newsfeed lists
 */
class Newsfeed_SaveList extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.saveList');
    }
    /**
     * numeric list identifier (if not sent, will be set automatically).
     *
     * {"type":"int","minimum":0}
     */
    public function _list_id(int $list_id) : Newsfeed_SaveList
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
    /**
     * list name.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Newsfeed_SaveList
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * users and communities identifiers to be added to the list. Community identifiers must be negative numbers.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _source_ids(array $source_ids) : Newsfeed_SaveList
    {
        $this->params['source_ids'] = $source_ids;
        return $this;
    }
    /**
     * reposts display on and off ('1' is for off).
     *
     * {"type":"bool"}
     */
    public function _no_reposts(bool $no_reposts) : Newsfeed_SaveList
    {
        $this->params['no_reposts'] = $no_reposts;
        return $this;
    }
}