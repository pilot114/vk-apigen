<?php

namespace VkApigen\Method\Apps;

/**
 * Deletes all request notifications from the current app.
 */
class DeleteAppRequests extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('apps.deleteAppRequests');
    }
}