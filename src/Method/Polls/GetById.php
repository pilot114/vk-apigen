<?php

namespace VkApigen\Method\Polls;

/**
 * Returns detailed information about a poll by its ID.
 */
class GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('polls.getById');
    }
    /**
     * ID of the user or community that owns the poll. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * '1' – poll is in a board, '0' – poll is on a wall. '0' by default.
     *
     * {"type":"bool"}
     */
    public function _is_board(bool $is_board) : self
    {
        $this->params['is_board'] = $is_board;
        return $this;
    }
    /**
     * Poll ID.
     *
     * {"type":"int","minimum":0}
     */
    public function poll_id(int $poll_id) : self
    {
        $this->params['poll_id'] = $poll_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":3,"minimum":0,"maximum":100}
     */
    public function _friends_count(int $friends_count) : self
    {
        $this->params['friends_count'] = $friends_count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"nom","enum":["abl","acc","dat","gen","ins","nom"]}
     */
    public function _name_case(string $name_case) : self
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}