<?php

namespace VkApigen\Method\Groups;

/**
 * Нет описания
 */
class Ban extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.ban');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _end_date(int $end_date) : self
    {
        $this->params['end_date'] = $end_date;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _reason(int $reason) : self
    {
        $this->params['reason'] = $reason;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _comment(string $comment) : self
    {
        $this->params['comment'] = $comment;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _comment_visible(bool $comment_visible) : self
    {
        $this->params['comment_visible'] = $comment_visible;
        return $this;
    }
}