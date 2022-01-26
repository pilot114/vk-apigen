<?php

namespace VkApigen\Method\Notes;

/**
 * Returns a list of notes created by a user.
 */
class Get extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.get');
    }
    /**
     * Note IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _note_ids(array $note_ids) : self
    {
        $this->params['note_ids'] = $note_ids;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of notes to return.
     *
     * {"type":"int","default":20,"minimum":0,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0,"enum":[0,1]}
     */
    public function _sort(int $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
}