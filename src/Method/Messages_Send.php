<?php

namespace VkApigen\Method;

/**
 * Sends a message.
 */
class Messages_Send extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.send');
    }
    /**
     * User ID (by default — current user).
     *
     * {"type":"int"}
     */
    public function _user_id(int $user_id) : Messages_Send
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Unique identifier to avoid resending the message.
     *
     * {"type":"int"}
     */
    public function _random_id(int $random_id) : Messages_Send
    {
        $this->params['random_id'] = $random_id;
        return $this;
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Messages_Send
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * User's short address (for example, 'illarionov').
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : Messages_Send
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * ID of conversation the message will relate to.
     *
     * {"type":"int","minimum":0}
     */
    public function _chat_id(int $chat_id) : Messages_Send
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * IDs of message recipients (if new conversation shall be started).
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _user_ids(array $user_ids) : Messages_Send
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the message.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Messages_Send
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _lat(float $lat) : Messages_Send
    {
        $this->params['lat'] = $lat;
        return $this;
    }
    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _long(float $long) : Messages_Send
    {
        $this->params['long'] = $long;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the message, separated by commas, in the following format: "<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'wall' — wall post, '<owner_id>' — ID of the media attachment owner. '<media_id>' — media attachment ID. Example: "photo100172_166443618"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachment(array $attachment) : Messages_Send
    {
        $this->params['attachment'] = $attachment;
        return $this;
    }
    /**
     * ID of forwarded messages, separated with a comma. Listed messages of the sender will be shown in the message body at the recipient's. Example: "123,431,544"
     *
     * {"type":"string"}
     */
    public function _forward_messages(string $forward_messages) : Messages_Send
    {
        $this->params['forward_messages'] = $forward_messages;
        return $this;
    }
    /**
     * Sticker id.
     *
     * {"type":"int","minimum":0}
     */
    public function _sticker_id(int $sticker_id) : Messages_Send
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * '1' if the message is a notification (for community messages).
     *
     * {"type":"bool"}
     */
    public function _notification(bool $notification) : Messages_Send
    {
        $this->params['notification'] = $notification;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_Send
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}