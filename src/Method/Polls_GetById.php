<?php

namespace VkApigen\Method;

/**
 * Returns detailed information about a poll by its ID.
 */
class Polls_GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('polls.getById');
    }
    /**
     * ID of the user or community that owns the poll. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Polls_GetById
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * '1' – poll is in a board, '0' – poll is on a wall. '0' by default.
     *
     * {"type":"bool"}
     */
    public function _is_board(bool $is_board) : Polls_GetById
    {
        $this->params['is_board'] = $is_board;
        return $this;
    }
    /**
     * Poll ID.
     *
     * {"type":"int","minimum":0}
     */
    public function poll_id(int $poll_id) : Polls_GetById
    {
        $this->params['poll_id'] = $poll_id;
        return $this;
    }
}