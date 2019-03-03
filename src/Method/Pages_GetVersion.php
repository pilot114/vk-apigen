<?php

namespace VkApigen\Method;

/**
 * Returns the text of one of the previous versions of a wiki page.
 */
class Pages_GetVersion extends \VkApigen\BaseMethod
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
        return $this->onCall('pages.getVersion');
    }
    /**
     * 
     *
     * {"type":"int"}
     */
    public function version_id(int $version_id) : Pages_GetVersion
    {
        $this->params['version_id'] = $version_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Pages_GetVersion
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Pages_GetVersion
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * '1' — to return the page as HTML
     *
     * {"type":"bool"}
     */
    public function _need_html(bool $need_html) : Pages_GetVersion
    {
        $this->params['need_html'] = $need_html;
        return $this;
    }
}