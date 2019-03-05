<?php

namespace VkApigen\Method\Utils;

/**
 * Detects a type of object (e.g., user, community, application) and its ID by screen name.
 */
class ResolveScreenName extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('utils.resolveScreenName');
    }
    /**
     * Screen name of the user, community (e.g., 'apiclub,' 'andrew', or 'rules_of_war'), or application.
     *
     * {"type":"string"}
     */
    public function screen_name(string $screen_name) : self
    {
        $this->params['screen_name'] = $screen_name;
        return $this;
    }
}