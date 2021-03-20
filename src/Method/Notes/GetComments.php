<?php

namespace VkApigen\Method\Notes;

/**
 * Returns a list of comments on a note.
 */
class GetComments extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.getComments');
    }
    /**
     * Note ID.
     *
     * {"type":"int","minimum":0}
     */
    public function note_id(int $note_id) : self
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
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
     * Number of comments to return.
     *
     * {"type":"int","default":20,"minimum":0,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}