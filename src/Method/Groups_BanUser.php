<?php

namespace VkApigen\Method;

/**
 * Adds a user to a community blacklist.
 */
class Groups_BanUser extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.banUser');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_BanUser
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Groups_BanUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Date (in Unix time) when the user will be removed from the blacklist.
     *
     * {"type":"int","minimum":0}
     */
    public function _end_date(int $end_date) : Groups_BanUser
    {
        $this->params['end_date'] = $end_date;
        return $this;
    }
    /**
     * Reason for ban: '1' — spam, '2' — verbal abuse, '3' — strong language, '4' — irrelevant messages, '0' — other (default)
     *
     * {"type":"int","minimum":0,"default":0,"enum":[0,1,2,3,4],"enumNames":["other","spam","verbal abuse","strong language","irrelevant messages"]}
     */
    public function _reason(int $reason) : Groups_BanUser
    {
        $this->params['reason'] = $reason;
        return $this;
    }
    /**
     * Text of comment to ban.
     *
     * {"type":"string"}
     */
    public function _comment(string $comment) : Groups_BanUser
    {
        $this->params['comment'] = $comment;
        return $this;
    }
    /**
     * '1' — text of comment will be visible to the user,, '0' — text of comment will be invisible to the user. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _comment_visible(bool $comment_visible) : Groups_BanUser
    {
        $this->params['comment_visible'] = $comment_visible;
        return $this;
    }
}