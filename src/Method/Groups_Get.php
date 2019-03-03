<?php

namespace VkApigen\Method;

/**
 * Returns a list of the communities to which a user belongs.
 */
class Groups_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.get');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Groups_Get
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * '1' — to return complete information about a user's communities, '0' — to return a list of community IDs without any additional fields (default),
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Groups_Get
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Types of communities to return: 'admin' — to return communities administered by the user , 'editor' — to return communities where the user is an administrator or editor, 'moder' — to return communities where the user is an administrator, editor, or moderator, 'groups' — to return only groups, 'publics' — to return only public pages, 'events' — to return only events
     *
     * {"type":"array","items":{"type":"string","enum":["admin","editor","moder","groups","publics","events"]}}
     */
    public function _filter(array $filter) : Groups_Get
    {
        $this->params['filter'] = $filter;
        return $this;
    }
    /**
     * Profile fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Groups_Get
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of communities.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Groups_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of communities to return.
     *
     * {"type":"int","minimum":0,"maximum":1000}
     */
    public function _count(int $count) : Groups_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
}