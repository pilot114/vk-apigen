<?php

namespace VkApigen\Method\Secure;

/**
 * Shows a list of SMS notifications sent by the application using [vk.com/dev/secure.sendSMSNotification|secure.sendSMSNotification] method.
 */
class GetSMSHistory extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['service']);
    }
    public function call()
    {
        return $this->onCall('secure.getSMSHistory');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * filter by start date. It is set as UNIX-time.
     *
     * {"type":"int","minimum":0}
     */
    public function _date_from(int $date_from) : self
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * filter by end date. It is set as UNIX-time.
     *
     * {"type":"int","minimum":0}
     */
    public function _date_to(int $date_to) : self
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
    /**
     * number of returned posts. By default — 1000.
     *
     * {"type":"int","minimum":0,"default":1000,"maximum":1000}
     */
    public function _limit(int $limit) : self
    {
        $this->params['limit'] = $limit;
        return $this;
    }
}