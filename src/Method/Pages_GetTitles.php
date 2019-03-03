<?php

namespace VkApigen\Method;

/**
 * Returns a list of wiki pages in a group.
 */
class Pages_GetTitles extends \VkApigen\BaseMethod
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
        return $this->onCall('pages.getTitles');
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Pages_GetTitles
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}