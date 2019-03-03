<?php

namespace VkApigen\Method;

/**
 * Reports (submits a complaint about) a post on a user wall or community wall.
 */
class Wall_ReportPost extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.reportPost');
    }
    /**
     * ID of the user or community that owns the wall.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Wall_ReportPost
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : Wall_ReportPost
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * Reason for the complaint: '0' – spam, '1' – child pornography, '2' – extremism, '3' – violence, '4' – drug propaganda, '5' – adult material, '6' – insult, abuse
     *
     * {"type":"int","minimum":0,"enum":[0,1,2,3,4,5,6],"enumNames":["spam","child pornography","extremism","violence","drug propaganda","adult material","insult abuse"]}
     */
    public function _reason(int $reason) : Wall_ReportPost
    {
        $this->params['reason'] = $reason;
        return $this;
    }
}