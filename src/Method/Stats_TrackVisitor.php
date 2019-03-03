<?php

namespace VkApigen\Method;

/**
 * not description
 */
class Stats_TrackVisitor extends \VkApigen\BaseMethod
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
        return $this->onCall('stats.trackVisitor');
    }
}