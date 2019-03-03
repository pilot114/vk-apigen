<?php

namespace VkApigen\Method;

/**
 * Deletes shortened link from user's list.
 */
class Utils_DeleteFromLastShortened extends \VkApigen\BaseMethod
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
        return $this->onCall('utils.deleteFromLastShortened');
    }
    /**
     * Link key (characters after vk.cc/).
     *
     * {"type":"string"}
     */
    public function key(string $key) : Utils_DeleteFromLastShortened
    {
        $this->params['key'] = $key;
        return $this;
    }
}