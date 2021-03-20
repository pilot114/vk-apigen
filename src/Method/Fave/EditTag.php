<?php

namespace VkApigen\Method\Fave;

/**
 * Нет описания
 */
class EditTag extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('fave.editTag');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function id(int $id) : self
    {
        $this->params['id'] = $id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":50}
     */
    public function name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
}