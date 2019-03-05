<?php

namespace VkApigen\Method\Polls;

/**
 * Creates polls that can be attached to the users' or communities' posts.
 */
class Create extends \VkApigen\BaseMethod
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
        return $this->onCall('polls.create');
    }
    /**
     * question text
     *
     * {"type":"string"}
     */
    public function _question(string $question) : self
    {
        $this->params['question'] = $question;
        return $this;
    }
    /**
     * '1' – anonymous poll, participants list is hidden,, '0' – public poll, participants list is available,, Default value is '0'.
     *
     * {"type":"bool"}
     */
    public function _is_anonymous(bool $is_anonymous) : self
    {
        $this->params['is_anonymous'] = $is_anonymous;
        return $this;
    }
    /**
     * If a poll will be added to a communty it is required to send a negative group identifier. Current user by default.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * available answers list, for example: " ["yes","no","maybe"]", There can be from 1 to 10 answers.
     *
     * {"type":"string"}
     */
    public function _add_answers(string $add_answers) : self
    {
        $this->params['add_answers'] = $add_answers;
        return $this;
    }
}