<?php

namespace VkApigen\Method\Notes;

/**
 * Edits a note of the current user.
 */
class Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.edit');
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
     * Note title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Note text.
     *
     * {"type":"string"}
     */
    public function text(string $text) : self
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_view(array $privacy_view) : self
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_comment(array $privacy_comment) : self
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
}