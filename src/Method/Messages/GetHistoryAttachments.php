<?php

namespace VkApigen\Method\Messages;

/**
 * Returns media files from the dialog or group chat.
 */
class GetHistoryAttachments extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getHistoryAttachments');
    }
    /**
     * Peer ID. ", For group chat: '2000000000 + chat ID' , , For community: '-community ID'"
     *
     * {"type":"int"}
     */
    public function peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Type of media files to return: *'photo',, *'video',, *'audio',, *'doc',, *'link'.,*'market'.,*'wall'.,*'share'
     *
     * {"type":"string","default":"photo","enum":["audio","audio_message","doc","graffiti","link","market","photo","share","video","wall"]}
     */
    public function _media_type(string $media_type) : self
    {
        $this->params['media_type'] = $media_type;
        return $this;
    }
    /**
     * Message ID to start return results from.
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : self
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Number of objects to return.
     *
     * {"type":"int","default":30,"minimum":0,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"bool"}
     */
    public function _photo_sizes(bool $photo_sizes) : self
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
    /**
     * Additional profile [vk.com/dev/fields|fields] to return. 
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
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
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _preserve_order(bool $preserve_order) : self
    {
        $this->params['preserve_order'] = $preserve_order;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":45,"minimum":0,"maximum":45}
     */
    public function _max_forwards_level(int $max_forwards_level) : self
    {
        $this->params['max_forwards_level'] = $max_forwards_level;
        return $this;
    }
}