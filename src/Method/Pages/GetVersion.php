<?php

namespace VkApigen\Method\Pages;

/**
 * Returns the text of one of the previous versions of a wiki page.
 */
class GetVersion extends \VkApigen\BaseMethod
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
        return $this->onCall('pages.getVersion');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function version_id(int $version_id) : self
    {
        $this->params['version_id'] = $version_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"int"}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * '1' — to return the page as HTML
     *
     * {"type":"bool"}
     */
    public function _need_html(bool $need_html) : self
    {
        $this->params['need_html'] = $need_html;
        return $this;
    }
}