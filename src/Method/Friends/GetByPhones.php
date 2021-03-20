<?php

namespace VkApigen\Method\Friends;

/**
 * Returns a list of the current user's friends whose phone numbers, validated or specified in a profile, are in a given list.
 */
class GetByPhones extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getByPhones');
    }
    /**
     * List of phone numbers in MSISDN format (maximum 1000). Example: "+79219876543,+79111234567"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _phones(array $phones) : self
    {
        $this->params['phones'] = $phones;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online, counters'.
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}