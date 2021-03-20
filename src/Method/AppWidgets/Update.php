<?php

namespace VkApigen\Method\AppWidgets;

/**
 * Allows to update community app widget
 */
class Update extends \VkApigen\BaseMethod
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
        return $this->onCall('appWidgets.update');
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":100000}
     */
    public function code(string $code) : self
    {
        $this->params['code'] = $code;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["compact_list","cover_list","donation","list","match","matches","table","text","tiles"]}
     */
    public function type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
}