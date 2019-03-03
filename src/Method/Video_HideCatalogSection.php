<?php

namespace VkApigen\Method;

/**
 * Hides a video catalog section from a user.
 */
class Video_HideCatalogSection extends \VkApigen\BaseMethod
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
        return $this->onCall('video.hideCatalogSection');
    }
    /**
     * 'id' value returned with a block to hide by the '' method.
     *
     * {"type":"int"}
     */
    public function section_id(int $section_id) : Video_HideCatalogSection
    {
        $this->params['section_id'] = $section_id;
        return $this;
    }
}