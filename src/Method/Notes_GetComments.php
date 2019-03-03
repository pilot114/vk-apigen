<?php

namespace VkApigen\Method;

/**
 * Returns a list of comments on a note.
 */
class Notes_GetComments extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.getComments');
    }
    /**
     * Note ID.
     *
     * {"type":"int","minimum":0}
     */
    public function note_id(int $note_id) : Notes_GetComments
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : Notes_GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : Notes_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
}