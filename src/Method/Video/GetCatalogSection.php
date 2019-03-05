<?php

namespace VkApigen\Method\Video;

/**
 * Returns a separate catalog section
 */
class GetCatalogSection extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
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
    public function section_id(string $section_id) : self
    {
        $this->params['section_id'] = $section_id;
        return $this;
    }
    /**
     * 'next' value returned with a block by the '' method.
     *
     * {"type":"string"}
     */
    public function from(string $from) : self
    {
        $this->params['from'] = $from;
        return $this;
    }
    /**
     * number of blocks to return.
     *
     * {"type":"int","minimum":0,"default":10,"maximum":16}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * 1 – return additional infor about users and communities in profiles and groups fields.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}