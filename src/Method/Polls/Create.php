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
     * '1' - anonymous poll, participants list is hidden,, '0' - public poll, participants list is available,, Default value is '0'.
     *
     * {"type":"bool"}
     */
    public function _is_anonymous(bool $is_anonymous) : self
    {
        $this->params['is_anonymous'] = $is_anonymous;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _is_multiple(bool $is_multiple) : self
    {
        $this->params['is_multiple'] = $is_multiple;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":1550700000}
     */
    public function _end_date(int $end_date) : self
    {
        $this->params['end_date'] = $end_date;
        return $this;
    }
    /**
     * If a poll will be added to a communty it is required to send a negative group identifier. Current user by default.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _app_id(int $app_id) : self
    {
        $this->params['app_id'] = $app_id;
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
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _photo_id(int $photo_id) : self
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":[1,2,3,4,6,8,9]}
     */
    public function _background_id(string $background_id) : self
    {
        $this->params['background_id'] = $background_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _disable_unvote(bool $disable_unvote) : self
    {
        $this->params['disable_unvote'] = $disable_unvote;
        return $this;
    }
}