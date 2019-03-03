<?php

namespace VkApigen\Method;

/**
 * Reports (submits a complain about) a user.
 */
class Users_Report extends \VkApigen\BaseMethod
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
        return $this->onCall('users.report');
    }
    /**
     * ID of the user about whom a complaint is being made.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Users_Report
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Type of complaint: 'porn' – pornography, 'spam' – spamming, 'insult' – abusive behavior, 'advertisment' – disruptive advertisements
     *
     * {"type":"string","enum":["porn","spam","insult","advertisment"]}
     */
    public function type(string $type) : Users_Report
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Comment describing the complaint.
     *
     * {"type":"string"}
     */
    public function _comment(string $comment) : Users_Report
    {
        $this->params['comment'] = $comment;
        return $this;
    }
}