<?php

namespace VkApigen\Method;

/**
 * Edits information about a video on a user or community page.
 */
class Video_Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('video.edit');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_Edit
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int"}
     */
    public function video_id(int $video_id) : Video_Edit
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * New video title.
     *
     * {"type":"string"}
     */
    public function _name(string $name) : Video_Edit
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * New video description.
     *
     * {"type":"string"}
     */
    public function _desc(string $desc) : Video_Edit
    {
        $this->params['desc'] = $desc;
        return $this;
    }
    /**
     * Privacy settings in a [vk.com/dev/privacy_setting|special format]. Privacy setting is available for videos uploaded to own profile by user.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_view(array $privacy_view) : Video_Edit
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * Privacy settings for comments in a [vk.com/dev/privacy_setting|special format].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_comment(array $privacy_comment) : Video_Edit
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
    /**
     * Disable comments for the group video.
     *
     * {"type":"bool"}
     */
    public function _no_comments(bool $no_comments) : Video_Edit
    {
        $this->params['no_comments'] = $no_comments;
        return $this;
    }
    /**
     * '1' — to repeat the playback of the video, '0' — to play the video once,
     *
     * {"type":"bool"}
     */
    public function _repeat(bool $repeat) : Video_Edit
    {
        $this->params['repeat'] = $repeat;
        return $this;
    }
}