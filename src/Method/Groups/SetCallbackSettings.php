<?php

namespace VkApigen\Method\Groups;

/**
 * Allow to set notifications settings for group.
 */
class SetCallbackSettings extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.setCallbackSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Server ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _server_id(int $server_id) : self
    {
        $this->params['server_id'] = $server_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _api_version(string $api_version) : self
    {
        $this->params['api_version'] = $api_version;
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
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _message_edit(bool $message_edit) : self
    {
        $this->params['message_edit'] = $message_edit;
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
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _message_typing_state(bool $message_typing_state) : self
    {
        $this->params['message_typing_state'] = $message_typing_state;
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
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _market_order_new(bool $market_order_new) : self
    {
        $this->params['market_order_new'] = $market_order_new;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _market_order_edit(bool $market_order_edit) : self
    {
        $this->params['market_order_edit'] = $market_order_edit;
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
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _group_change_settings(bool $group_change_settings) : self
    {
        $this->params['group_change_settings'] = $group_change_settings;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _group_change_photo(bool $group_change_photo) : self
    {
        $this->params['group_change_photo'] = $group_change_photo;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _group_officers_edit(bool $group_officers_edit) : self
    {
        $this->params['group_officers_edit'] = $group_officers_edit;
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
    /**
     * New form in lead forms
     *
     * {"type":"bool"}
     */
    public function _lead_forms_new(bool $lead_forms_new) : self
    {
        $this->params['lead_forms_new'] = $lead_forms_new;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _like_add(bool $like_add) : self
    {
        $this->params['like_add'] = $like_add;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _like_remove(bool $like_remove) : self
    {
        $this->params['like_remove'] = $like_remove;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _message_event(bool $message_event) : self
    {
        $this->params['message_event'] = $message_event;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _donut_subscription_create(bool $donut_subscription_create) : self
    {
        $this->params['donut_subscription_create'] = $donut_subscription_create;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _donut_subscription_prolonged(bool $donut_subscription_prolonged) : self
    {
        $this->params['donut_subscription_prolonged'] = $donut_subscription_prolonged;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _donut_subscription_cancelled(bool $donut_subscription_cancelled) : self
    {
        $this->params['donut_subscription_cancelled'] = $donut_subscription_cancelled;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _donut_subscription_price_changed(bool $donut_subscription_price_changed) : self
    {
        $this->params['donut_subscription_price_changed'] = $donut_subscription_price_changed;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _donut_subscription_expired(bool $donut_subscription_expired) : self
    {
        $this->params['donut_subscription_expired'] = $donut_subscription_expired;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _donut_money_withdraw(bool $donut_money_withdraw) : self
    {
        $this->params['donut_money_withdraw'] = $donut_money_withdraw;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _donut_money_withdraw_error(bool $donut_money_withdraw_error) : self
    {
        $this->params['donut_money_withdraw_error'] = $donut_money_withdraw_error;
        return $this;
    }
}