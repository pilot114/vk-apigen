<?php

namespace VkApigen\Method\Video;

/**
 * Edits information about a video on a user or community page.
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
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('video.edit');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int","format":"int32","minimum":0}
     */
    public function video_id(int $video_id) : self
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * New video title.
     *
     * {"type":"string"}
     */
    public function _name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * New video description.
     *
     * {"type":"string"}
     */
    public function _desc(string $desc) : self
    {
        $this->params['desc'] = $desc;
        return $this;
    }
    /**
     * Privacy settings in a [vk.com/dev/privacy_setting|special format]. Privacy setting is available for videos uploaded to own profile by user.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_view(array $privacy_view) : self
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * Privacy settings for comments in a [vk.com/dev/privacy_setting|special format].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_comment(array $privacy_comment) : self
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
    /**
     * Disable comments for the group video.
     *
     * {"type":"bool"}
     */
    public function _no_comments(bool $no_comments) : self
    {
        $this->params['no_comments'] = $no_comments;
        return $this;
    }
    /**
     * '1' — to repeat the playback of the video, '0' — to play the video once,
     *
     * {"type":"bool"}
     */
    public function _repeat(bool $repeat) : self
    {
        $this->params['repeat'] = $repeat;
        return $this;
    }
}