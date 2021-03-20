<?php

namespace VkApigen\Method\Messages;

/**
 * Returns a list of user's important messages.
 */
class GetImportantMessages extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getImportantMessages');
    }
    /**
     * Amount of needed important messages.
     *
     * {"type":"int","default":20,"minimum":0,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _start_message_id(int $start_message_id) : self
    {
        $this->params['start_message_id'] = $start_message_id;
        return $this;
    }
    /**
     * Maximum length of messages body.
     *
     * {"type":"int","minimum":0}
     */
    public function _preview_length(int $preview_length) : self
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * Actors fields to return.
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/base_user_group_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Return extended properties
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}