<?php

namespace VkApigen\Method\Secure;

/**
 * Shows history of votes transaction between users and the application.
 */
class GetTransactionsHistory extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.getTransactionsHistory');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _type(int $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function _uid_from(int $uid_from) : self
    {
        $this->params['uid_from'] = $uid_from;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function _uid_to(int $uid_to) : self
    {
        $this->params['uid_to'] = $uid_to;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _date_from(int $date_from) : self
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _date_to(int $date_to) : self
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":1000,"minimum":0,"maximum":1000}
     */
    public function _limit(int $limit) : self
    {
        $this->params['limit'] = $limit;
        return $this;
    }
}