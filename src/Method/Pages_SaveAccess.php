<?php

namespace VkApigen\Method;

/**
 * Saves modified read and edit access settings for a wiki page.
 */
class Pages_SaveAccess extends \VkApigen\BaseMethod
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
        return $this->onCall('pages.saveAccess');
    }
    /**
     * Wiki page ID.
     *
     * {"type":"int"}
     */
    public function page_id(int $page_id) : Pages_SaveAccess
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Pages_SaveAccess
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Pages_SaveAccess
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Who can view the wiki page: '1' — only community members, '2' — all users can view the page, '0' — only community managers
     *
     * {"type":"int","enum":[0,1,2],"enumNames":["managers","members","all"]}
     */
    public function _view(int $view) : Pages_SaveAccess
    {
        $this->params['view'] = $view;
        return $this;
    }
    /**
     * Who can edit the wiki page: '1' — only community members, '2' — all users can edit the page, '0' — only community managers
     *
     * {"type":"int","enum":[0,1,2],"enumNames":["managers","members","all"]}
     */
    public function _edit(int $edit) : Pages_SaveAccess
    {
        $this->params['edit'] = $edit;
        return $this;
    }
}