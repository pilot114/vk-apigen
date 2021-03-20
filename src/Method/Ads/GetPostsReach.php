<?php

namespace VkApigen\Method\Ads;

/**
 * Returns detailed statistics of promoted posts reach from campaigns and ads.
 */
class GetPostsReach extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getPostsReach');
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
     * Type of requested objects listed in 'ids' parameter: *ad — ads,, *campaign — campaigns.
     *
     * {"type":"string","enum":["ad","campaign"]}
     */
    public function ids_type(string $ids_type) : self
    {
        $this->params['ids_type'] = $ids_type;
        return $this;
    }
    /**
     * IDs requested ads or campaigns, separated with a comma, depending on the value set in 'ids_type'. Maximum 100 objects.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : self
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}