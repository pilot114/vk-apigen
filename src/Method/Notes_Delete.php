<?php

namespace VkApigen\Method;

/**
 * Deletes a note of the current user.
 */
class Notes_Delete extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.delete');
    }
    /**
     * Note ID.
     *
     * {"type":"int","minimum":0}
     */
    public function note_id(int $note_id) : Notes_Delete
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
}