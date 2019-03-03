<?php

namespace VkApigen\Method;

/**
 * Deletes all request notifications from the current app.
 */
class Apps_DeleteAppRequests extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.deleteAppRequests');
    }
}