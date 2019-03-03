<?php

namespace VkApigen\Method;

/**
 * Creates a new topic on a community's discussion board.
 */
class Board_AddTopic extends \VkApigen\BaseMethod
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
        return $this->onCall('board.addTopic');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Board_AddTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Board_AddTopic
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Text of the topic.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : Board_AddTopic
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * For a community: '1' — to post the topic as by the community, '0' — to post the topic as by the user (default)
     *
     * {"type":"bool"}
     */
    public function _from_group(bool $from_group) : Board_AddTopic
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * List of media objects attached to the topic, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media object: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media owner. '<media_id>' — Media ID. Example: "photo100172_166443618,photo66748_265827614", , "NOTE: If you try to attach more than one reference, an error will be thrown.",
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Board_AddTopic
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
}