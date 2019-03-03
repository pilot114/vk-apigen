<?php

namespace VkApigen\Method;

/**
 * Edits the title of a topic on a community's discussion board.
 */
class Board_EditTopic extends \VkApigen\BaseMethod
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
        return $this->onCall('board.editTopic');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Board_EditTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"int","minimum":0}
     */
    public function topic_id(int $topic_id) : Board_EditTopic
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * New title of the topic.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Board_EditTopic
    {
        $this->params['title'] = $title;
        return $this;
    }
}