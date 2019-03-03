<?php

namespace VkApigen\Method;

/**
 * Reports (submits a complaint about) a comment on a photo.
 */
class Photos_ReportComment extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.reportComment');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Photos_ReportComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the comment being reported.
     *
     * {"type":"int","minimum":0}
     */
    public function comment_id(int $comment_id) : Photos_ReportComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * Reason for the complaint: '0' – spam, '1' – child pornography, '2' – extremism, '3' – violence, '4' – drug propaganda, '5' – adult material, '6' – insult, abuse
     *
     * {"type":"int","minimum":0,"enum":[0,1,2,3,4,5,6],"enumNames":["spam","child pornography","extremism","violence","drug propaganda","adult material","insult abuse"]}
     */
    public function _reason(int $reason) : Photos_ReportComment
    {
        $this->params['reason'] = $reason;
        return $this;
    }
}