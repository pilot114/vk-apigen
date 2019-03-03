<?php

namespace VkApigen\Method;

/**
 * Deletes the current user's vote from the selected answer in the poll.
 */
class Polls_DeleteVote extends \VkApigen\BaseMethod
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
        return $this->onCall('polls.deleteVote');
    }
    /**
     * ID of the user or community that owns the poll. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Polls_DeleteVote
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Poll ID.
     *
     * {"type":"int","minimum":0}
     */
    public function poll_id(int $poll_id) : Polls_DeleteVote
    {
        $this->params['poll_id'] = $poll_id;
        return $this;
    }
    /**
     * Answer ID.
     *
     * {"type":"int","minimum":0}
     */
    public function answer_id(int $answer_id) : Polls_DeleteVote
    {
        $this->params['answer_id'] = $answer_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _is_board(bool $is_board) : Polls_DeleteVote
    {
        $this->params['is_board'] = $is_board;
        return $this;
    }
}