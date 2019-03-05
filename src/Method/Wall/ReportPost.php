<?php

namespace VkApigen\Method\Wall;

/**
 * Reports (submits a complaint about) a post on a user wall or community wall.
 */
class ReportPost extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.reportPost');
    }
    /**
     * ID of the user or community that owns the wall.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * Reason for the complaint: '0' – spam, '1' – child pornography, '2' – extremism, '3' – violence, '4' – drug propaganda, '5' – adult material, '6' – insult, abuse
     *
     * {"type":"int","minimum":0,"enum":[0,1,2,3,4,5,6],"enumNames":["spam","child pornography","extremism","violence","drug propaganda","adult material","insult abuse"]}
     */
    public function _reason(int $reason) : self
    {
        $this->params['reason'] = $reason;
        return $this;
    }
}