<?php

namespace VkApigen\Method;

/**
 * Returns detailed information on users.
 */
class Users_Get extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('users.get');
    }
    /**
     * User IDs or screen names ('screen_name'). By default, current user ID.
     *
     * {"type":"array","items":{"type":"string"},"maxItems":1000}
     */
    public function _user_ids(array $user_ids) : Users_Get
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online', 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post', 'universities',
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Users_Get
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: 'nom' — nominative (default), 'gen' — genitive , 'dat' — dative, 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
     *
     * {"type":"string","default":"nom","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Users_Get
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}