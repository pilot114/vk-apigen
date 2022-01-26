<?php

namespace VkApigen\Method\Wall;

/**
 * Edits a post on a user wall or community wall.
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
        return $this->onCall('wall.edit');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _friends_only(bool $friends_only) : self
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the post.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media application owner. '<media_id>' — Media application ID. Example: "photo100172_166443618,photo66748_265827614", May contain a link to an external page to include in the post. Example: "photo66748_265827614,http://habrahabr.ru", "NOTE: If more than one link is being attached, an error is thrown."
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : self
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _services(string $services) : self
    {
        $this->params['services'] = $services;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _signed(bool $signed) : self
    {
        $this->params['signed'] = $signed;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _publish_date(int $publish_date) : self
    {
        $this->params['publish_date'] = $publish_date;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float"}
     */
    public function _lat(float $lat) : self
    {
        $this->params['lat'] = $lat;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float"}
     */
    public function _long(float $long) : self
    {
        $this->params['long'] = $long;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _place_id(int $place_id) : self
    {
        $this->params['place_id'] = $place_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _mark_as_ads(bool $mark_as_ads) : self
    {
        $this->params['mark_as_ads'] = $mark_as_ads;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _close_comments(bool $close_comments) : self
    {
        $this->params['close_comments'] = $close_comments;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _donut_paid_duration(int $donut_paid_duration) : self
    {
        $this->params['donut_paid_duration'] = $donut_paid_duration;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _poster_bkg_id(int $poster_bkg_id) : self
    {
        $this->params['poster_bkg_id'] = $poster_bkg_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _poster_bkg_owner_id(int $poster_bkg_owner_id) : self
    {
        $this->params['poster_bkg_owner_id'] = $poster_bkg_owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _poster_bkg_access_hash(string $poster_bkg_access_hash) : self
    {
        $this->params['poster_bkg_access_hash'] = $poster_bkg_access_hash;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _copyright(string $copyright) : self
    {
        $this->params['copyright'] = $copyright;
        return $this;
    }
    /**
     * Topic ID. Allowed values can be obtained from newsfeed.getPostTopics method
     *
     * {"type":"int","minimum":0,"enum":[0,1,7,12,16,19,21,23,25,26,32,43],"enumNames":["empty_topic","art","it","games","music","photo","science_and_tech","sport","travel","tv_and_cinema","humor","fashion"]}
     */
    public function _topic_id(int $topic_id) : self
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
}