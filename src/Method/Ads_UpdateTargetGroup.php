<?php

namespace VkApigen\Method;

/**
 * Edits a retarget group.
 */
class Ads_UpdateTargetGroup extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.updateTargetGroup');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_UpdateTargetGroup
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.' , ID of the client with the advertising account where the group will be created.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : Ads_UpdateTargetGroup
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Group ID.
     *
     * {"type":"int","minimum":0}
     */
    public function target_group_id(int $target_group_id) : Ads_UpdateTargetGroup
    {
        $this->params['target_group_id'] = $target_group_id;
        return $this;
    }
    /**
     * New name of the target group — a string up to 64 characters long.
     *
     * {"type":"string","maxLength":64}
     */
    public function name(string $name) : Ads_UpdateTargetGroup
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Domain of the site where user accounting code will be placed.
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : Ads_UpdateTargetGroup
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * 'Only for the groups that get audience from sites with user accounting code.', Time in days when users added to a retarget group will be automatically excluded from it. '0' – automatic exclusion is off.
     *
     * {"type":"int","minimum":0}
     */
    public function _lifetime(int $lifetime) : Ads_UpdateTargetGroup
    {
        $this->params['lifetime'] = $lifetime;
        return $this;
    }
}