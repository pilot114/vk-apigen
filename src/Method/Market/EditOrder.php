<?php

namespace VkApigen\Method\Market;

/**
 * Edit order
 */
class EditOrder extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('market.editOrder');
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function order_id(int $order_id) : self
    {
        $this->params['order_id'] = $order_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":800}
     */
    public function _merchant_comment(string $merchant_comment) : self
    {
        $this->params['merchant_comment'] = $merchant_comment;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _status(int $status) : self
    {
        $this->params['status'] = $status;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":60}
     */
    public function _track_number(string $track_number) : self
    {
        $this->params['track_number'] = $track_number;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["not_paid","paid","returned"]}
     */
    public function _payment_status(string $payment_status) : self
    {
        $this->params['payment_status'] = $payment_status;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _delivery_price(int $delivery_price) : self
    {
        $this->params['delivery_price'] = $delivery_price;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100000}
     */
    public function _width(int $width) : self
    {
        $this->params['width'] = $width;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100000}
     */
    public function _length(int $length) : self
    {
        $this->params['length'] = $length;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100000}
     */
    public function _height(int $height) : self
    {
        $this->params['height'] = $height;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":100000000}
     */
    public function _weight(int $weight) : self
    {
        $this->params['weight'] = $weight;
        return $this;
    }
}