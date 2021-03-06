<?php

namespace VkApigen\Method\Notes;

/**
 * Creates a new note for the current user.
 */
class Add extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.add');
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
     * {"type":"array","default":"all","items":{"type":"string"}}
     */
    public function _privacy_view(array $privacy_view) : self
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","default":"all","items":{"type":"string"}}
     */
    public function _privacy_comment(array $privacy_comment) : self
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
}