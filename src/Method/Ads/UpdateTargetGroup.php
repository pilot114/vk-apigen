<?php

namespace VkApigen\Method\Ads;

/**
 * Edits a retarget group.
 */
class UpdateTargetGroup extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
     * Group ID.
     *
     * {"type":"int","minimum":0}
     */
    public function target_group_id(int $target_group_id) : self
    {
        $this->params['target_group_id'] = $target_group_id;
        return $this;
    }
    /**
     * New name of the target group — a string up to 64 characters long.
     *
     * {"type":"string","maxLength":64}
     */
    public function name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Domain of the site where user accounting code will be placed.
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : self
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * 'Only for the groups that get audience from sites with user accounting code.', Time in days when users added to a retarget group will be automatically excluded from it. '0' – automatic exclusion is off.
     *
     * {"type":"int","minimum":0}
     */
    public function _lifetime(int $lifetime) : self
    {
        $this->params['lifetime'] = $lifetime;
        return $this;
    }
}