<?php

namespace VkApigen\Method\Notes;

/**
 * Deletes a note of the current user.
 */
class Delete extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.delete');
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
}