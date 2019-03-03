<?php

namespace VkApigen\Method;

/**
 * Returns a list of IDs of followers of the user in question, sorted by date added, most recent first.
 */
class Users_GetFollowers extends \VkApigen\BaseMethod
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
        return $this->onCall('users.getFollowers');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Users_GetFollowers
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of followers.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Users_GetFollowers
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of followers to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : Users_GetFollowers
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online'.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Users_GetFollowers
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: 'nom' — nominative (default), 'gen' — genitive , 'dat' — dative, 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Users_GetFollowers
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}