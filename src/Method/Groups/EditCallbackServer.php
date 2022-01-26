<?php

namespace VkApigen\Method\Groups;

/**
 * Нет описания
 */
class EditCallbackServer extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.editCallbackServer');
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function server_id(int $server_id) : self
    {
        $this->params['server_id'] = $server_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function url(string $url) : self
    {
        $this->params['url'] = $url;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":14}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":50}
     */
    public function _secret_key(string $secret_key) : self
    {
        $this->params['secret_key'] = $secret_key;
        return $this;
    }
}