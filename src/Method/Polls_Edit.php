<?php

namespace VkApigen\Method;

/**
 * Edits created polls
 */
class Polls_Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('polls.edit');
    }
    /**
     * poll owner id
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Polls_Edit
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * edited poll's id
     *
     * {"type":"int","minimum":0}
     */
    public function poll_id(int $poll_id) : Polls_Edit
    {
        $this->params['poll_id'] = $poll_id;
        return $this;
    }
    /**
     * new question text
     *
     * {"type":"string"}
     */
    public function _question(string $question) : Polls_Edit
    {
        $this->params['question'] = $question;
        return $this;
    }
    /**
     * answers list, for example: , "["yes","no","maybe"]"
     *
     * {"type":"string"}
     */
    public function _add_answers(string $add_answers) : Polls_Edit
    {
        $this->params['add_answers'] = $add_answers;
        return $this;
    }
    /**
     * object containing answers that need to be edited,, key – answer id, value – new answer text. Example: {"382967099":"option1", "382967103":"option2"}"
     *
     * {"type":"string"}
     */
    public function _edit_answers(string $edit_answers) : Polls_Edit
    {
        $this->params['edit_answers'] = $edit_answers;
        return $this;
    }
    /**
     * list of answer ids to be deleted. For example: "[382967099, 382967103]"
     *
     * {"type":"string"}
     */
    public function _delete_answers(string $delete_answers) : Polls_Edit
    {
        $this->params['delete_answers'] = $delete_answers;
        return $this;
    }
}