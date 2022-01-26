<?php

namespace VkApigen\Method\Users;

/**
 * Reports (submits a complain about) a user.
 */
class Report extends \VkApigen\BaseMethod
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
        return $this->onCall('users.report');
    }
    /**
     * ID of the user about whom a complaint is being made.
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Type of complaint: 'porn' - pornography, 'spam' - spamming, 'insult' - abusive behavior, 'advertisement' - disruptive advertisements
     *
     * {"type":"string","enum":["porn","spam","insult","advertisement"]}
     */
    public function type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Comment describing the complaint.
     *
     * {"type":"string"}
     */
    public function _comment(string $comment) : self
    {
        $this->params['comment'] = $comment;
        return $this;
    }
}