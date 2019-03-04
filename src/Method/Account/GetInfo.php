<?php

namespace VkApigen\Method\Account;

/**
 * Returns current account info.
 */
class GetInfo extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('account.getInfo');
    }
    /**
     * Fields to return. Possible values: *'country' — user country,, *'https_required' — is "HTTPS only" option enabled,, *'own_posts_default' — is "Show my posts only" option is enabled,, *'no_wall_replies' — are wall replies disabled or not,, *'intro' — is intro passed by user or not,, *'lang' — user language. By default: all.
     *
     * {"type":"array","items":{"type":"string","enum":["country","https_required","own_posts_default","no_wall_replies","intro","lang"]}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}