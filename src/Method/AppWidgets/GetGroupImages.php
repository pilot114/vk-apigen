<?php

namespace VkApigen\Method\AppWidgets;

/**
 * Returns a community collection of images for community app widgets
 */
class GetGroupImages extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['group']);
    }
    public function call()
    {
        return $this->onCall('appWidgets.getGroupImages');
    }
    /**
     * Offset needed to return a specific subset of images.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum count of results.
     *
     * {"type":"int","default":20,"minimum":0,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["160x160","160x240","24x24","50x50","510x128"]}
     */
    public function _image_type(string $image_type) : self
    {
        $this->params['image_type'] = $image_type;
        return $this;
    }
}