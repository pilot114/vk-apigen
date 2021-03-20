<?php

namespace VkApigen\Method\Messages;

/**
 * Creates a chat with several participants.
 */
class CreateChat extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.createChat');
    }
    /**
     * IDs of the users to be added to the chat.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Chat title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}