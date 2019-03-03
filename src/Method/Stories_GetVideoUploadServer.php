<?php

namespace VkApigen\Method;

/**
 * Allows to receive URL for uploading story with video.
 */
class Stories_GetVideoUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.getVideoUploadServer');
    }
    /**
     * 1 — to add the story to friend's feed.
     *
     * {"type":"bool"}
     */
    public function _add_to_news(bool $add_to_news) : Stories_GetVideoUploadServer
    {
        $this->params['add_to_news'] = $add_to_news;
        return $this;
    }
    /**
     * List of users IDs who can see the story.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : Stories_GetVideoUploadServer
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * ID of the story to reply with the current.
     *
     * {"type":"string"}
     */
    public function _reply_to_story(string $reply_to_story) : Stories_GetVideoUploadServer
    {
        $this->params['reply_to_story'] = $reply_to_story;
        return $this;
    }
    /**
     * Link text (for community's stories only).
     *
     * {"type":"string"}
     */
    public function _link_text(string $link_text) : Stories_GetVideoUploadServer
    {
        $this->params['link_text'] = $link_text;
        return $this;
    }
    /**
     * Link URL. Internal links on https://vk.com only.
     *
     * {"type":"string"}
     */
    public function _link_url(string $link_url) : Stories_GetVideoUploadServer
    {
        $this->params['link_url'] = $link_url;
        return $this;
    }
    /**
     * ID of the community to upload the story (should be verified or with the "fire" icon).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Stories_GetVideoUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}