<?php

namespace VkApigen\Method;

/**
 * Returns a list of the current user's friends whose phone numbers, validated or specified in a profile, are in a given list.
 */
class Friends_GetByPhones extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getByPhones');
    }
    /**
     * List of phone numbers in MSISDN format (maximum 1000). Example: "+79219876543,+79111234567"
     *
     * {"type":"array","items":{"type":"string"},"maxItems":1000}
     */
    public function _phones(array $phones) : Friends_GetByPhones
    {
        $this->params['phones'] = $phones;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online, counters'.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Friends_GetByPhones
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}