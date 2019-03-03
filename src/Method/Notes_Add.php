<?php

namespace VkApigen\Method;

/**
 * Creates a new note for the current user.
 */
class Notes_Add extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.add');
    }
    /**
     * Note title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Notes_Add
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Note text.
     *
     * {"type":"string"}
     */
    public function text(string $text) : Notes_Add
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_view(array $privacy_view) : Notes_Add
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_comment(array $privacy_comment) : Notes_Add
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
}