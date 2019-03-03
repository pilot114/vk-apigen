<?php

namespace VkApigen\Method;

/**
 * Imports a list of advertiser's contacts to count VK registered users against the target group.
 */
class Ads_ImportTargetContacts extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.importTargetContacts');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_ImportTargetContacts
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.' , ID of the client with the advertising account where the group will be created.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : Ads_ImportTargetContacts
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Target group ID.
     *
     * {"type":"int","minimum":0}
     */
    public function target_group_id(int $target_group_id) : Ads_ImportTargetContacts
    {
        $this->params['target_group_id'] = $target_group_id;
        return $this;
    }
    /**
     * List of phone numbers, emails or user IDs separated with a comma.
     *
     * {"type":"string"}
     */
    public function contacts(string $contacts) : Ads_ImportTargetContacts
    {
        $this->params['contacts'] = $contacts;
        return $this;
    }
}