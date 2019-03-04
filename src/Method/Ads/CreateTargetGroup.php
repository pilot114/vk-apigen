<?php

namespace VkApigen\Method\Ads;

/**
 * Creates a group to re-target ads for users who visited advertiser's site (viewed information about the product, registered, etc.).
 */
class CreateTargetGroup extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.createTargetGroup');
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
     * 'Only for advertising agencies.', ID of the client with the advertising account where the group will be created.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : self
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Name of the target group — a string up to 64 characters long.
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
     * 'For groups with auditory created with pixel code only.', , Number of days after that users will be automatically removed from the group. '0' — not to remove users.
     *
     * {"type":"int","minimum":0}
     */
    public function _lifetime(int $lifetime) : self
    {
        $this->params['lifetime'] = $lifetime;
        return $this;
    }
}