<?php

namespace VkApigen\Method\Stories;

/**
 * Returns URL for uploading a story with photo.
 */
class GetPhotoUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.getPhotoUploadServer');
    }
    /**
     * 1 — to add the story to friend's feed.
     *
     * {"type":"bool"}
     */
    public function _add_to_news(bool $add_to_news) : self
    {
        $this->params['add_to_news'] = $add_to_news;
        return $this;
    }
    /**
     * List of users IDs who can see the story.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * ID of the story to reply with the current.
     *
     * {"type":"string"}
     */
    public function _reply_to_story(string $reply_to_story) : self
    {
        $this->params['reply_to_story'] = $reply_to_story;
        return $this;
    }
    /**
     * Link text (for community's stories only).
     *
     * {"type":"string","enum":["to_store","vote","more","book","order","enroll","fill","signup","buy","ticket","write","open","learn_more","view","go_to","contact","watch","play","install","read"]}
     */
    public function _link_text(string $link_text) : self
    {
        $this->params['link_text'] = $link_text;
        return $this;
    }
    /**
     * Link URL. Internal links on https://vk.com only.
     *
     * {"type":"string"}
     */
    public function _link_url(string $link_url) : self
    {
        $this->params['link_url'] = $link_url;
        return $this;
    }
    /**
     * ID of the community to upload the story (should be verified or with the "fire" icon).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}