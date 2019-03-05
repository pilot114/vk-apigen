<?php

namespace VkApigen\Method\Leads;

/**
 * Creates new session for the user passing the offer.
 */
class Start extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('leads.start');
    }
    /**
     * Lead ID.
     *
     * {"type":"int","minimum":0}
     */
    public function lead_id(int $lead_id) : self
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Secret key from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function secret(string $secret) : self
    {
        $this->params['secret'] = $secret;
        return $this;
    }
}