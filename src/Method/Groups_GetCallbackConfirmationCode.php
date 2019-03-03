<?php

namespace VkApigen\Method;

/**
 * Returns Callback API confirmation code for the community.
 */
class Groups_GetCallbackConfirmationCode extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.getCallbackConfirmationCode');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_GetCallbackConfirmationCode
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}