<?php

namespace VkApigen\Method\AppWidgets;

/**
 * Returns a URL for uploading a photo to the community collection for community app widgets
 */
class GetAppImageUploadServer extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['service']);
    }
    public function call()
    {
        return $this->onCall('appWidgets.getAppImageUploadServer');
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["160x160","160x240","24x24","50x50","510x128"]}
     */
    public function image_type(string $image_type) : self
    {
        $this->params['image_type'] = $image_type;
        return $this;
    }
}