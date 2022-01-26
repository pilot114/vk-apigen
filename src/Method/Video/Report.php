<?php

namespace VkApigen\Method\Video;

/**
 * Reports (submits a complaint about) a video.
 */
class Report extends \VkApigen\BaseMethod
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
        return $this->onCall('video.report');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int","format":"int32","minimum":0}
     */
    public function video_id(int $video_id) : self
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * Reason for the complaint: '0' - spam, '1' - child pornography, '2' - extremism, '3' - violence, '4' - drug propaganda, '5' - adult material, '6' - insult, abuse
     *
     * {"type":"int","minimum":0,"enum":[0,1,2,3,4,5,6],"enumNames":["spam","child pornography","extremism","violence","drug propaganda","adult material","insult abuse"]}
     */
    public function _reason(int $reason) : self
    {
        $this->params['reason'] = $reason;
        return $this;
    }
    /**
     * Comment describing the complaint.
     *
     * {"type":"string"}
     */
    public function _comment(string $comment) : self
    {
        $this->params['comment'] = $comment;
        return $this;
    }
    /**
     * (If the video was found in search results.) Search query string.
     *
     * {"type":"string"}
     */
    public function _search_query(string $search_query) : self
    {
        $this->params['search_query'] = $search_query;
        return $this;
    }
}