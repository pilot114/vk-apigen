<?php

namespace VkApigen\Method\Likes;

/**
 * Returns a list of IDs of users who added the specified object to their 'Likes' list.
 */
class GetList extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('likes.getList');
    }
    /**
     * , Object type: 'post' — post on user or community wall, 'comment' — comment on a wall post, 'photo' — photo, 'audio' — audio, 'video' — video, 'note' — note, 'photo_comment' — comment on the photo, 'video_comment' — comment on the video, 'topic_comment' — comment in the discussion, 'sitepage' — page of the site where the [vk.com/dev/Like|Like widget] is installed
     *
     * {"type":"string","enum":["post","comment","photo","audio","video","note","photo_comment","video_comment","topic_comment","sitepage"]}
     */
    public function type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * ID of the user, community, or application that owns the object. If the 'type' parameter is set as 'sitepage', the application ID is passed as 'owner_id'. Use negative value for a community id. If the 'type' parameter is not set, the 'owner_id' is assumed to be either the current user or the same application ID as if the 'type' parameter was set to 'sitepage'.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Object ID. If 'type' is set as 'sitepage', 'item_id' can include the 'page_id' parameter value used during initialization of the [vk.com/dev/Like|Like widget].
     *
     * {"type":"int"}
     */
    public function _item_id(int $item_id) : self
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * URL of the page where the [vk.com/dev/Like|Like widget] is installed. Used instead of the 'item_id' parameter.
     *
     * {"type":"string"}
     */
    public function _page_url(string $page_url) : self
    {
        $this->params['page_url'] = $page_url;
        return $this;
    }
    /**
     * Filters to apply: 'likes' — returns information about all users who liked the object (default), 'copies' — returns information only about users who told their friends about the object
     *
     * {"type":"string","default":"likes","enum":["likes","copies"]}
     */
    public function _filter(string $filter) : self
    {
        $this->params['filter'] = $filter;
        return $this;
    }
    /**
     * Specifies which users are returned: '1' — to return only the current user's friends, '0' — to return all users (default)
     *
     * {"type":"bool"}
     */
    public function _friends_only(bool $friends_only) : self
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * Specifies whether extended information will be returned. '1' — to return extended information about users and communities from the 'Likes' list, '0' — to return no additional information (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Offset needed to select a specific subset of users.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of user IDs to return (maximum '1000'). Default is '100' if 'friends_only' is set to '0', otherwise, the default is '10' if 'friends_only' is set to '1'.
     *
     * {"type":"int","minimum":0,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _skip_own(bool $skip_own) : self
    {
        $this->params['skip_own'] = $skip_own;
        return $this;
    }
}