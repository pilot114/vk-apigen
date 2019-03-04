<?php

namespace VkApigen\Method\Groups;

/**
 * Sets Long Poll notification settings
 */
class SetLongPollSettings extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('groups.setLongPollSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Sets whether Long Poll is enabled ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _enabled(bool $enabled) : self
    {
        $this->params['enabled'] = $enabled;
        return $this;
    }
    /**
     * A new incoming message has been received ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _message_new(bool $message_new) : self
    {
        $this->params['message_new'] = $message_new;
        return $this;
    }
    /**
     * A new outcoming message has been received ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _message_reply(bool $message_reply) : self
    {
        $this->params['message_reply'] = $message_reply;
        return $this;
    }
    /**
     * A message has been edited ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _message_edit(bool $message_edit) : self
    {
        $this->params['message_edit'] = $message_edit;
        return $this;
    }
    /**
     * Allowed messages notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _message_allow(bool $message_allow) : self
    {
        $this->params['message_allow'] = $message_allow;
        return $this;
    }
    /**
     * Denied messages notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _message_deny(bool $message_deny) : self
    {
        $this->params['message_deny'] = $message_deny;
        return $this;
    }
    /**
     * New photos notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _photo_new(bool $photo_new) : self
    {
        $this->params['photo_new'] = $photo_new;
        return $this;
    }
    /**
     * New audios notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _audio_new(bool $audio_new) : self
    {
        $this->params['audio_new'] = $audio_new;
        return $this;
    }
    /**
     * New videos notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _video_new(bool $video_new) : self
    {
        $this->params['video_new'] = $video_new;
        return $this;
    }
    /**
     * New wall replies notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _wall_reply_new(bool $wall_reply_new) : self
    {
        $this->params['wall_reply_new'] = $wall_reply_new;
        return $this;
    }
    /**
     * Wall replies edited notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _wall_reply_edit(bool $wall_reply_edit) : self
    {
        $this->params['wall_reply_edit'] = $wall_reply_edit;
        return $this;
    }
    /**
     * A wall comment has been deleted ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _wall_reply_delete(bool $wall_reply_delete) : self
    {
        $this->params['wall_reply_delete'] = $wall_reply_delete;
        return $this;
    }
    /**
     * A wall comment has been restored ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _wall_reply_restore(bool $wall_reply_restore) : self
    {
        $this->params['wall_reply_restore'] = $wall_reply_restore;
        return $this;
    }
    /**
     * New wall posts notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _wall_post_new(bool $wall_post_new) : self
    {
        $this->params['wall_post_new'] = $wall_post_new;
        return $this;
    }
    /**
     * New wall posts notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _wall_repost(bool $wall_repost) : self
    {
        $this->params['wall_repost'] = $wall_repost;
        return $this;
    }
    /**
     * New board posts notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _board_post_new(bool $board_post_new) : self
    {
        $this->params['board_post_new'] = $board_post_new;
        return $this;
    }
    /**
     * Board posts edited notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _board_post_edit(bool $board_post_edit) : self
    {
        $this->params['board_post_edit'] = $board_post_edit;
        return $this;
    }
    /**
     * Board posts restored notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _board_post_restore(bool $board_post_restore) : self
    {
        $this->params['board_post_restore'] = $board_post_restore;
        return $this;
    }
    /**
     * Board posts deleted notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _board_post_delete(bool $board_post_delete) : self
    {
        $this->params['board_post_delete'] = $board_post_delete;
        return $this;
    }
    /**
     * New comment to photo notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _photo_comment_new(bool $photo_comment_new) : self
    {
        $this->params['photo_comment_new'] = $photo_comment_new;
        return $this;
    }
    /**
     * A photo comment has been edited ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _photo_comment_edit(bool $photo_comment_edit) : self
    {
        $this->params['photo_comment_edit'] = $photo_comment_edit;
        return $this;
    }
    /**
     * A photo comment has been deleted ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _photo_comment_delete(bool $photo_comment_delete) : self
    {
        $this->params['photo_comment_delete'] = $photo_comment_delete;
        return $this;
    }
    /**
     * A photo comment has been restored ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _photo_comment_restore(bool $photo_comment_restore) : self
    {
        $this->params['photo_comment_restore'] = $photo_comment_restore;
        return $this;
    }
    /**
     * New comment to video notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _video_comment_new(bool $video_comment_new) : self
    {
        $this->params['video_comment_new'] = $video_comment_new;
        return $this;
    }
    /**
     * A video comment has been edited ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _video_comment_edit(bool $video_comment_edit) : self
    {
        $this->params['video_comment_edit'] = $video_comment_edit;
        return $this;
    }
    /**
     * A video comment has been deleted ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _video_comment_delete(bool $video_comment_delete) : self
    {
        $this->params['video_comment_delete'] = $video_comment_delete;
        return $this;
    }
    /**
     * A video comment has been restored ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _video_comment_restore(bool $video_comment_restore) : self
    {
        $this->params['video_comment_restore'] = $video_comment_restore;
        return $this;
    }
    /**
     * New comment to market item notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _market_comment_new(bool $market_comment_new) : self
    {
        $this->params['market_comment_new'] = $market_comment_new;
        return $this;
    }
    /**
     * A market comment has been edited ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _market_comment_edit(bool $market_comment_edit) : self
    {
        $this->params['market_comment_edit'] = $market_comment_edit;
        return $this;
    }
    /**
     * A market comment has been deleted ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _market_comment_delete(bool $market_comment_delete) : self
    {
        $this->params['market_comment_delete'] = $market_comment_delete;
        return $this;
    }
    /**
     * A market comment has been restored ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _market_comment_restore(bool $market_comment_restore) : self
    {
        $this->params['market_comment_restore'] = $market_comment_restore;
        return $this;
    }
    /**
     * A vote in a public poll has been added ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _poll_vote_new(bool $poll_vote_new) : self
    {
        $this->params['poll_vote_new'] = $poll_vote_new;
        return $this;
    }
    /**
     * Joined community notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _group_join(bool $group_join) : self
    {
        $this->params['group_join'] = $group_join;
        return $this;
    }
    /**
     * Left community notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"bool"}
     */
    public function _group_leave(bool $group_leave) : self
    {
        $this->params['group_leave'] = $group_leave;
        return $this;
    }
    /**
     * User added to community blacklist
     *
     * {"type":"bool"}
     */
    public function _user_block(bool $user_block) : self
    {
        $this->params['user_block'] = $user_block;
        return $this;
    }
    /**
     * User removed from community blacklist
     *
     * {"type":"bool"}
     */
    public function _user_unblock(bool $user_unblock) : self
    {
        $this->params['user_unblock'] = $user_unblock;
        return $this;
    }
}