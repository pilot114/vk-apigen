<?php

namespace VkApigen\Method;

/**
 * Edits a note of the current user.
 */
class Notes_Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.edit');
    }
    /**
     * Note ID.
     *
     * {"type":"int","minimum":0}
     */
    public function note_id(int $note_id) : Notes_Edit
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
    /**
     * Note title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Notes_Edit
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Note text.
     *
     * {"type":"string"}
     */
    public function text(string $text) : Notes_Edit
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_view(array $privacy_view) : Notes_Edit
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_comment(array $privacy_comment) : Notes_Edit
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
}