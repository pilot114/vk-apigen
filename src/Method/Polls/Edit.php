<?php

namespace VkApigen\Method\Polls;

/**
 * Edits created polls
 */
class Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('polls.edit');
    }
    /**
     * poll owner id
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * edited poll's id
     *
     * {"type":"int","minimum":0}
     */
    public function poll_id(int $poll_id) : self
    {
        $this->params['poll_id'] = $poll_id;
        return $this;
    }
    /**
     * new question text
     *
     * {"type":"string"}
     */
    public function _question(string $question) : self
    {
        $this->params['question'] = $question;
        return $this;
    }
    /**
     * answers list, for example: , "["yes","no","maybe"]"
     *
     * {"type":"string"}
     */
    public function _add_answers(string $add_answers) : self
    {
        $this->params['add_answers'] = $add_answers;
        return $this;
    }
    /**
     * object containing answers that need to be edited,, key – answer id, value – new answer text. Example: {"382967099":"option1", "382967103":"option2"}"
     *
     * {"type":"string"}
     */
    public function _edit_answers(string $edit_answers) : self
    {
        $this->params['edit_answers'] = $edit_answers;
        return $this;
    }
    /**
     * list of answer ids to be deleted. For example: "[382967099, 382967103]"
     *
     * {"type":"string"}
     */
    public function _delete_answers(string $delete_answers) : self
    {
        $this->params['delete_answers'] = $delete_answers;
        return $this;
    }
}