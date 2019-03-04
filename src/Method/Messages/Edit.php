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
        parent::__construct($client, $defaultQuery);
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
     * {"type":"string"}
     */
    public function _message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _lat(float $lat) : self
    {
        $this->params['lat'] = $lat;
        return $this;
    }
    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _long(float $long) : self
    {
        $this->params['long'] = $long;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the message, separated by commas, in the following format: "<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'wall' — wall post, '<owner_id>' — ID of the media attachment owner. '<media_id>' — media attachment ID. Example: "photo100172_166443618"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachment(array $attachment) : self
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
}