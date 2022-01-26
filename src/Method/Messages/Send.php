<?php

namespace VkApigen\Method\Messages;

/**
 * Sends a message.
 */
class Send extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.send');
    }
    /**
     * User ID (by default — current user).
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Unique identifier to avoid resending the message.
     *
     * {"type":"int"}
     */
    public function _random_id(int $random_id) : self
    {
        $this->params['random_id'] = $random_id;
        return $this;
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
     *
     * {"type":"int","format":"int32"}
     */
    public function _peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * IDs of message recipients. (See peer_id)
     *
     * {"type":"array","items":{"type":"integer","format":"int32"},"maxItems":100}
     */
    public function _peer_ids(array $peer_ids) : self
    {
        $this->params['peer_ids'] = $peer_ids;
        return $this;
    }
    /**
     * User's short address (for example, 'illarionov').
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : self
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * ID of conversation the message will relate to.
     *
     * {"type":"int","minimum":0,"maximum":100000000}
     */
    public function _chat_id(int $chat_id) : self
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * IDs of message recipients (if new conversation shall be started).
     *
     * {"type":"array","items":{"type":"integer","format":"int64","entity":"owner"},"maxItems":100}
     */
    public function _user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
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
     * {"type":"string","maxLength":9000}
     */
    public function _attachment(string $attachment) : self
    {
        $this->params['attachment'] = $attachment;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _reply_to(int $reply_to) : self
    {
        $this->params['reply_to'] = $reply_to;
        return $this;
    }
    /**
     * ID of forwarded messages, separated with a comma. Listed messages of the sender will be shown in the message body at the recipient's. Example: "123,431,544"
     *
     * {"type":"array","items":{"type":"integer"},"maxItems":1000}
     */
    public function _forward_messages(array $forward_messages) : self
    {
        $this->params['forward_messages'] = $forward_messages;
        return $this;
    }
    /**
     * JSON describing the forwarded message or reply
     *
     * {"type":"string","$ref":"objects.json#\/definitions\/messages_forward"}
     */
    public function _forward(string $forward) : self
    {
        $this->params['forward'] = $forward;
        return $this;
    }
    /**
     * Sticker id.
     *
     * {"type":"int","minimum":0}
     */
    public function _sticker_id(int $sticker_id) : self
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","$ref":"objects.json#\/definitions\/messages_keyboard"}
     */
    public function _keyboard(string $keyboard) : self
    {
        $this->params['keyboard'] = $keyboard;
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
     * {"type":"string","maxLength":1000}
     */
    public function _payload(string $payload) : self
    {
        $this->params['payload'] = $payload;
        return $this;
    }
    /**
     * JSON describing the content source in the message
     *
     * {"type":"string"}
     */
    public function _content_source(string $content_source) : self
    {
        $this->params['content_source'] = $content_source;
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
     * {"type":"bool","default":false}
     */
    public function _disable_mentions(bool $disable_mentions) : self
    {
        $this->params['disable_mentions'] = $disable_mentions;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"default","enum":["account_update","bot_ad_invite","bot_ad_promo","confirmed_notification","customer_support","default","game_notification","moderated_newsletter","non_promo_newsletter","promo_newsletter","purchase_update"]}
     */
    public function _intent(string $intent) : self
    {
        $this->params['intent'] = $intent;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100}
     */
    public function _subscribe_id(int $subscribe_id) : self
    {
        $this->params['subscribe_id'] = $subscribe_id;
        return $this;
    }
}