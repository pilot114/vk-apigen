<?php

namespace VkApigen\Method\AppWidgets;

/**
 * Returns an image for community app widgets by its ID
 */
class GetImagesById extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group', 'service']);
    }
    public function call()
    {
        return $this->onCall('appWidgets.getImagesById');
    }
    /**
     * List of images IDs
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function images(array $images) : self
    {
        $this->params['images'] = $images;
        return $this;
    }
}