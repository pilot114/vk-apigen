<?php

namespace VkApigen\Method;

/**
 * Returns media files from the dialog or group chat.
 */
class Messages_GetHistoryAttachments extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getHistoryAttachments');
    }
    /**
     * Peer ID. ", For group chat: '2000000000 + chat ID' , , For community: '-community ID'"
     *
     * {"type":"int"}
     */
    public function peer_id(int $peer_id) : Messages_GetHistoryAttachments
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Type of media files to return: *'photo',, *'video',, *'audio',, *'doc',, *'link'.,*'market'.,*'wall'.,*'share'
     *
     * {"type":"string","enum":["photo","video","doc","audio","link","market","wall","share"],"default":0}
     */
    public function _media_type(string $media_type) : Messages_GetHistoryAttachments
    {
        $this->params['media_type'] = $media_type;
        return $this;
    }
    /**
     * Message ID to start return results from.
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : Messages_GetHistoryAttachments
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Number of objects to return.
     *
     * {"type":"int","minimum":0,"maximum":200,"default":30}
     */
    public function _count(int $count) : Messages_GetHistoryAttachments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"bool"}
     */
    public function _photo_sizes(bool $photo_sizes) : Messages_GetHistoryAttachments
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
    /**
     * Additional profile [vk.com/dev/fields|fields] to return. 
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_GetHistoryAttachments
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_GetHistoryAttachments
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}