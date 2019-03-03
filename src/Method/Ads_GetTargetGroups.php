<?php

namespace VkApigen\Method;

/**
 * Returns a list of target groups.
 */
class Ads_GetTargetGroups extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getTargetGroups');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_GetTargetGroups
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.', ID of the client with the advertising account where the group will be created.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : Ads_GetTargetGroups
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * '1' — to return pixel code.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Ads_GetTargetGroups
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}