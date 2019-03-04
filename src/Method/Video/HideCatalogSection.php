<?php

namespace VkApigen\Method\Video;

/**
 * Hides a video catalog section from a user.
 */
class HideCatalogSection extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('video.hideCatalogSection');
    }
    /**
     * 'id' value returned with a block to hide by the '' method.
     *
     * {"type":"int"}
     */
    public function section_id(int $section_id) : self
    {
        $this->params['section_id'] = $section_id;
        return $this;
    }
}