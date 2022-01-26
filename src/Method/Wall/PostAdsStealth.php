<?php

namespace VkApigen\Method\Wall;

/**
 * Allows to create hidden post which will not be shown on the community's wall and can be used for creating an ad with type "Community post".
 */
class PostAdsStealth extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.postAdsStealth');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
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
     * Unique identifier to avoid duplication the same post.
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : self
    {
        $this->params['guid'] = $guid;
        return $this;
    }
    /**
     * Link button ID
     *
     * {"type":"string"}
     */
    public function _link_button(string $link_button) : self
    {
        $this->params['link_button'] = $link_button;
        return $this;
    }
    /**
     * Link title
     *
     * {"type":"string"}
     */
    public function _link_title(string $link_title) : self
    {
        $this->params['link_title'] = $link_title;
        return $this;
    }
    /**
     * Link image url
     *
     * {"type":"string"}
     */
    public function _link_image(string $link_image) : self
    {
        $this->params['link_image'] = $link_image;
        return $this;
    }
    /**
     * Link video ID in format "<owner_id>_<media_id>"
     *
     * {"type":"string"}
     */
    public function _link_video(string $link_video) : self
    {
        $this->params['link_video'] = $link_video;
        return $this;
    }
}