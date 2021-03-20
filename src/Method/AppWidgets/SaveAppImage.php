<?php

namespace VkApigen\Method\AppWidgets;

/**
 * Allows to save image into app collection for community app widgets
 */
class SaveAppImage extends \VkApigen\BaseMethod
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
        return $this->onCall('appWidgets.saveAppImage');
    }
    /**
     * Parameter returned when photo is uploaded to server
     *
     * {"type":"string"}
     */
    public function hash(string $hash) : self
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * Parameter returned when photo is uploaded to server
     *
     * {"type":"string"}
     */
    public function image(string $image) : self
    {
        $this->params['image'] = $image;
        return $this;
    }
}