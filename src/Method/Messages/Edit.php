<?php

namespace VkApigen\Method\Messages;

/**
 * Edits the message.
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('messages.edit');
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the message.
     *
     * {"type":"string","maxLength":9000}
     */
    public function _message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * {"type":"float"}
     */
    public function _lat(float $lat) : self
    {
        $this->params['lat'] = $lat;
        return $this;
    }
    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * {"type":"float"}
     */
    public function _long(float $long) : self
    {
        $this->params['long'] = $long;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the message, separated by commas, in the following format: "<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'wall' — wall post, '<owner_id>' — ID of the media attachment owner. '<media_id>' — media attachment ID. Example: "photo100172_166443618"
     *
     * {"type":"string"}
     */
    public function _attachment(string $attachment) : self
    {
        $this->params['attachment'] = $attachment;
        return $this;
    }
    /**
     * '1' — to keep forwarded, messages.
     *
     * {"type":"bool"}
     */
    public function _keep_forward_messages(bool $keep_forward_messages) : self
    {
        $this->params['keep_forward_messages'] = $keep_forward_messages;
        return $this;
    }
    /**
     * '1' — to keep attached snippets.
     *
     * {"type":"bool"}
     */
    public function _keep_snippets(bool $keep_snippets) : self
    {
        $this->params['keep_snippets'] = $keep_snippets;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":false}
     */
    public function _dont_parse_links(bool $dont_parse_links) : self
    {
        $this->params['dont_parse_links'] = $dont_parse_links;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _message_id(int $message_id) : self
    {
        $this->params['message_id'] = $message_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _conversation_message_id(int $conversation_message_id) : self
    {
        $this->params['conversation_message_id'] = $conversation_message_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _template(string $template) : self
    {
        $this->params['template'] = $template;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _keyboard(string $keyboard) : self
    {
        $this->params['keyboard'] = $keyboard;
        return $this;
    }
}