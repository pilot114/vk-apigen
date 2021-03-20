<?php

namespace VkApigen\Method\Apps;

/**
 * Returns applications data.
 */
class Get extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'service']);
    }
    public function call()
    {
        return $this->onCall('apps.get');
    }
    /**
     * Application ID
     *
     * {"type":"int","minimum":0}
     */
    public function _app_id(int $app_id) : self
    {
        $this->params['app_id'] = $app_id;
        return $this;
    }
    /**
     * List of application ID
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function _app_ids(array $app_ids) : self
    {
        $this->params['app_ids'] = $app_ids;
        return $this;
    }
    /**
     * platform. Possible values: *'ios' — iOS,, *'android' — Android,, *'winphone' — Windows Phone,, *'web' — приложения на vk.com. By default: 'web'.
     *
     * {"type":"string","default":"web","enum":["android","ios","web","winphone"]}
     */
    public function _platform(string $platform) : self
    {
        $this->params['platform'] = $platform;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _return_friends(bool $return_friends) : self
    {
        $this->params['return_friends'] = $return_friends;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online', 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post', 'universities', (only if return_friends - 1)
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: 'nom' — nominative (default),, 'gen' — genitive,, 'dat' — dative,, 'acc' — accusative,, 'ins' — instrumental,, 'abl' — prepositional. (only if 'return_friends' = '1')
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : self
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}