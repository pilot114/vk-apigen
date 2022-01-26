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
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('polls.addVote');
    }
    /**
     * ID of the user or community that owns the poll. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
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
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function answer_ids(array $answer_ids) : self
    {
        $this->params['answer_ids'] = $answer_ids;
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