<?php

namespace VkApigen\Method\LeadForms;

/**
 * Нет описания
 */
class Create extends \VkApigen\BaseMethod
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
        return $this->onCall('leadForms.create');
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
     * {"type":"string","maxLength":100}
     */
    public function name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":60}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":600}
     */
    public function description(string $description) : self
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function questions(string $questions) : self
    {
        $this->params['questions'] = $questions;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":200}
     */
    public function policy_link_url(string $policy_link_url) : self
    {
        $this->params['policy_link_url'] = $policy_link_url;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _photo(string $photo) : self
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":300}
     */
    public function _confirmation(string $confirmation) : self
    {
        $this->params['confirmation'] = $confirmation;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":200}
     */
    public function _site_link_url(string $site_link_url) : self
    {
        $this->params['site_link_url'] = $site_link_url;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _active(bool $active) : self
    {
        $this->params['active'] = $active;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _once_per_user(bool $once_per_user) : self
    {
        $this->params['once_per_user'] = $once_per_user;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _pixel_code(string $pixel_code) : self
    {
        $this->params['pixel_code'] = $pixel_code;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _notify_admins(array $notify_admins) : self
    {
        $this->params['notify_admins'] = $notify_admins;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _notify_emails(array $notify_emails) : self
    {
        $this->params['notify_emails'] = $notify_emails;
        return $this;
    }
}