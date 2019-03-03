<?php

namespace VkApigen\Method;

/**
 * Returns a list of users and communities banned from the current user's newsfeed.
 */
class Newsfeed_GetBanned extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.getBanned');
    }
    /**
     * '1' — return extra information about users and communities
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Newsfeed_GetBanned
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Profile fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Newsfeed_GetBanned
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: 'nom' — nominative (default), 'gen' — genitive , 'dat' — dative, 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Newsfeed_GetBanned
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}