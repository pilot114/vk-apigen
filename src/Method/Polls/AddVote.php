<?php

namespace VkApigen\Method\Polls;

/**
 * Adds the current user's vote to the selected answer in the poll.
 */
class AddVote extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('polls.addVote');
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
     * Answer ID.
     *
     * {"type":"int","minimum":0}
     */
    public function answer_id(int $answer_id) : self
    {
        $this->params['answer_id'] = $answer_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _is_board(bool $is_board) : self
    {
        $this->params['is_board'] = $is_board;
        return $this;
    }
}