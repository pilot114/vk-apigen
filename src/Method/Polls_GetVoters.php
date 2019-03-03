<?php

namespace VkApigen\Method;

/**
 * Returns a list of IDs of users who selected specific answers in the poll.
 */
class Polls_GetVoters extends \VkApigen\BaseMethod
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
        return $this->onCall('polls.getVoters');
    }
    /**
     * ID of the user or community that owns the poll. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Polls_GetVoters
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Poll ID.
     *
     * {"type":"int","minimum":0}
     */
    public function poll_id(int $poll_id) : Polls_GetVoters
    {
        $this->params['poll_id'] = $poll_id;
        return $this;
    }
    /**
     * Answer IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function answer_ids(array $answer_ids) : Polls_GetVoters
    {
        $this->params['answer_ids'] = $answer_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _is_board(bool $is_board) : Polls_GetVoters
    {
        $this->params['is_board'] = $is_board;
        return $this;
    }
    /**
     * '1' — to return only current user's friends, '0' — to return all users (default),
     *
     * {"type":"bool"}
     */
    public function _friends_only(bool $friends_only) : Polls_GetVoters
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of voters. '0' — (default)
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Polls_GetVoters
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of user IDs to return (if the 'friends_only' parameter is not set, maximum '1000', otherwise '10'). '100' — (default)
     *
     * {"type":"int","minimum":0,"default":100}
     */
    public function _count(int $count) : Polls_GetVoters
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate (birthdate)', 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online', 'counters'.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Polls_GetVoters
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: , 'nom' — nominative (default) , 'gen' — genitive , 'dat' — dative , 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Polls_GetVoters
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}