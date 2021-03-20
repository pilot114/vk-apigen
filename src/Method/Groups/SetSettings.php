<?php

namespace VkApigen\Method\Groups;

/**
 * Нет описания
 */
class SetSettings extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('groups.setSettings');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _messages(bool $messages) : self
    {
        $this->params['messages'] = $messages;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _bots_capabilities(bool $bots_capabilities) : self
    {
        $this->params['bots_capabilities'] = $bots_capabilities;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _bots_start_button(bool $bots_start_button) : self
    {
        $this->params['bots_start_button'] = $bots_start_button;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _bots_add_to_chat(bool $bots_add_to_chat) : self
    {
        $this->params['bots_add_to_chat'] = $bots_add_to_chat;
        return $this;
    }
}