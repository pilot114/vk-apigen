<?php

namespace VkApigen\Method;

/**
 * Deletes a topic from a community's discussion board.
 */
class Board_DeleteTopic extends \VkApigen\BaseMethod
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
        return $this->onCall('board.deleteTopic');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Board_DeleteTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"int","minimum":0}
     */
    public function topic_id(int $topic_id) : Board_DeleteTopic
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
}