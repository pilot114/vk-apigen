<?php

namespace VkApigen\Method;

/**
 * Returns a list of IDs of users participating in a chat.
 */
class Messages_GetConversationMembers extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getConversationMembers');
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_GetConversationMembers
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Peer ID.
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Messages_GetConversationMembers
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Profile fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_GetConversationMembers
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: 'nom' — nominative (default), 'gen' — genitive, 'dat' — dative, 'acc' — accusative, 'ins' — instrumental, 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Messages_GetConversationMembers
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}