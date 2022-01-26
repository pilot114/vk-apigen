<?php

namespace VkApigen\Method\LeadForms;

/**
 * Нет описания
 */
class GetLeads extends \VkApigen\BaseMethod
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
        return $this->onCall('leadForms.getLeads');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function form_id(int $form_id) : self
    {
        $this->params['form_id'] = $form_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":10,"minimum":1,"maximum":1000}
     */
    public function _limit(int $limit) : self
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _next_page_token(string $next_page_token) : self
    {
        $this->params['next_page_token'] = $next_page_token;
        return $this;
    }
}