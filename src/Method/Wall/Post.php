<?php

namespace VkApigen\Method\Wall;

/**
 * Adds a new post on a user wall or community wall. Can also be used to publish suggested or scheduled posts.
 */
class Post extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.post');
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
     * '1' — post will be available to friends only, '0' — post will be available to all users (default)
     *
     * {"type":"bool"}
     */
    public function _friends_only(bool $friends_only) : self
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * For a community: '1' — post will be published by the community, '0' — post will be published by the user (default)
     *
     * {"type":"bool"}
     */
    public function _from_group(bool $from_group) : self
    {
        $this->params['from_group'] = $from_group;
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
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'page' — wiki-page, 'note' — note, 'poll' — poll, 'album' — photo album, '<owner_id>' — ID of the media application owner. '<media_id>' — Media application ID. Example: "photo100172_166443618,photo66748_265827614", May contain a link to an external page to include in the post. Example: "photo66748_265827614,http://habrahabr.ru", "NOTE: If more than one link is being attached, an error will be thrown."
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : self
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * List of services or websites the update will be exported to, if the user has so requested. Sample values: 'twitter', 'facebook'.
     *
     * {"type":"string"}
     */
    public function _services(string $services) : self
    {
        $this->params['services'] = $services;
        return $this;
    }
    /**
     * Only for posts in communities with 'from_group' set to '1': '1' — post will be signed with the name of the posting user, '0' — post will not be signed (default)
     *
     * {"type":"bool"}
     */
    public function _signed(bool $signed) : self
    {
        $this->params['signed'] = $signed;
        return $this;
    }
    /**
     * Publication date (in Unix time). If used, posting will be delayed until the set time.
     *
     * {"type":"int","minimum":0}
     */
    public function _publish_date(int $publish_date) : self
    {
        $this->params['publish_date'] = $publish_date;
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
     * ID of the location where the user was tagged.
     *
     * {"type":"int","minimum":0}
     */
    public function _place_id(int $place_id) : self
    {
        $this->params['place_id'] = $place_id;
        return $this;
    }
    /**
     * Post ID. Used for publishing of scheduled and suggested posts.
     *
     * {"type":"int","minimum":0}
     */
    public function _post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : self
    {
        $this->params['guid'] = $guid;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":false}
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
     * {"type":"bool"}
     */
    public function _mute_notifications(bool $mute_notifications) : self
    {
        $this->params['mute_notifications'] = $mute_notifications;
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