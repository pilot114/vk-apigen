<?php

namespace VkApigen\Method\Messages;

/**
 * Returns updates in user's private messages.
 */
class GetLongPollHistory extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getLongPollHistory');
    }
    /**
     * Last value of the 'ts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"int","minimum":0}
     */
    public function _ts(int $ts) : self
    {
        $this->params['ts'] = $ts;
        return $this;
    }
    /**
     * Lsat value of 'pts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"int","minimum":0}
     */
    public function _pts(int $pts) : self
    {
        $this->params['pts'] = $pts;
        return $this;
    }
    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'. "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * {"type":"int","minimum":0}
     */
    public function _preview_length(int $preview_length) : self
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * '1' — to return history with online users only.
     *
     * {"type":"bool"}
     */
    public function _onlines(bool $onlines) : self
    {
        $this->params['onlines'] = $onlines;
        return $this;
    }
    /**
     * Additional profile [vk.com/dev/fields|fields] to return.
     *
     * {"type":"array","default":"photo,photo_medium_rec,sex,online,screen_name","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Maximum number of events to return.
     *
     * {"type":"int","default":1000,"minimum":1000}
     */
    public function _events_limit(int $events_limit) : self
    {
        $this->params['events_limit'] = $events_limit;
        return $this;
    }
    /**
     * Maximum number of messages to return.
     *
     * {"type":"int","default":200,"minimum":200}
     */
    public function _msgs_limit(int $msgs_limit) : self
    {
        $this->params['msgs_limit'] = $msgs_limit;
        return $this;
    }
    /**
     * Maximum ID of the message among existing ones in the local copy. Both messages received with API methods (for example, , ), and data received from a Long Poll server (events with code 4) are taken into account.
     *
     * {"type":"int","minimum":0}
     */
    public function _max_msg_id(int $max_msg_id) : self
    {
        $this->params['max_msg_id'] = $max_msg_id;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
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
     * {"type":"int","minimum":0}
     */
    public function _lp_version(int $lp_version) : self
    {
        $this->params['lp_version'] = $lp_version;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0,"maximum":2000}
     */
    public function _last_n(int $last_n) : self
    {
        $this->params['last_n'] = $last_n;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _credentials(bool $credentials) : self
    {
        $this->params['credentials'] = $credentials;
        return $this;
    }
}