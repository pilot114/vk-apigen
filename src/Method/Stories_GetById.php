<?php

namespace VkApigen\Method;

/**
 * Returns story by its ID.
 */
class Stories_GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.getById');
    }
    /**
     * Stories IDs separated by commas. Use format {owner_id}+'_'+{story_id}, for example, 12345_54331.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _stories(array $stories) : Stories_GetById
    {
        $this->params['stories'] = $stories;
        return $this;
    }
    /**
     * '1' — to return additional fields for users and communities. Default value is 0.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Stories_GetById
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Additional fields to return
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Stories_GetById
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}