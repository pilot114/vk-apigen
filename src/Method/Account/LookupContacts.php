<?php

namespace VkApigen\Method\Account;

/**
 * Allows to search the VK users using phone numbers, e-mail addresses and user IDs on other services.
 */
class LookupContacts extends \VkApigen\BaseMethod
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
        return $this->onCall('account.lookupContacts');
    }
    /**
     * List of contacts separated with commas
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _contacts(array $contacts) : self
    {
        $this->params['contacts'] = $contacts;
        return $this;
    }
    /**
     * String identifier of a service which contacts are used for searching. Possible values: , * email, * phone, * twitter, * facebook, * odnoklassniki, * instagram, * google
     *
     * {"type":"string","enum":["email","phone","twitter","facebook","odnoklassniki","instagram","google"]}
     */
    public function service(string $service) : self
    {
        $this->params['service'] = $service;
        return $this;
    }
    /**
     * Contact of a current user on a specified service
     *
     * {"type":"string"}
     */
    public function _mycontact(string $mycontact) : self
    {
        $this->params['mycontact'] = $mycontact;
        return $this;
    }
    /**
     * '1' – also return contacts found using this service before, '0' – return only contacts found using 'contacts' field.
     *
     * {"type":"bool"}
     */
    public function _return_all(bool $return_all) : self
    {
        $this->params['return_all'] = $return_all;
        return $this;
    }
    /**
     * Profile fields to return. Possible values: 'nickname, domain, sex, bdate, city, country, timezone, photo_50, photo_100, photo_200_orig, has_mobile, contacts, education, online, relation, last_seen, status, can_write_private_message, can_see_all_posts, can_post, universities'.
     *
     * {"type":"array","items":{"type":"string","enum":["nickname","domain","sex","bdate","city","country","timezone","photo_50","photo_100","photo_200_orig","has_mobile","contacts","education","online","relation","last_seen","status","can_write_private_message","can_see_all_posts","can_post","universities"]}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}