<?php

namespace VkApigen\Method;

/**
 * Returns a separate catalog section
 */
class Video_GetCatalogSection extends \VkApigen\BaseMethod
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
        return $this->onCall('video.getCatalogSection');
    }
    /**
     * 'id' value returned with a block by the '' method.
     *
     * {"type":"string"}
     */
    public function section_id(string $section_id) : Video_GetCatalogSection
    {
        $this->params['section_id'] = $section_id;
        return $this;
    }
    /**
     * 'next' value returned with a block by the '' method.
     *
     * {"type":"string"}
     */
    public function from(string $from) : Video_GetCatalogSection
    {
        $this->params['from'] = $from;
        return $this;
    }
    /**
     * number of blocks to return.
     *
     * {"type":"int","minimum":0,"default":10,"maximum":16}
     */
    public function _count(int $count) : Video_GetCatalogSection
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * 1 – return additional infor about users and communities in profiles and groups fields.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Video_GetCatalogSection
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}