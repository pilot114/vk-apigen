<?php

namespace VkApigen\Method\Ads;

/**
 * Imports a list of advertiser's contacts to count VK registered users against the target group.
 */
class ImportTargetContacts extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
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
    public function account_id(int $account_id) : self
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.' , ID of the client with the advertising account where the group will be created.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : self
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Target group ID.
     *
     * {"type":"int"}
     */
    public function target_group_id(int $target_group_id) : self
    {
        $this->params['target_group_id'] = $target_group_id;
        return $this;
    }
    /**
     * List of phone numbers, emails or user IDs separated with a comma.
     *
     * {"type":"string"}
     */
    public function contacts(string $contacts) : self
    {
        $this->params['contacts'] = $contacts;
        return $this;
    }
}