<?php

namespace VkApigen\Method;

/**
 * Edits current profile info.
 */
class Account_SaveProfileInfo extends \VkApigen\BaseMethod
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
        return $this->onCall('account.saveProfileInfo');
    }
    /**
     * User first name.
     *
     * {"type":"string"}
     */
    public function _first_name(string $first_name) : Account_SaveProfileInfo
    {
        $this->params['first_name'] = $first_name;
        return $this;
    }
    /**
     * User last name.
     *
     * {"type":"string"}
     */
    public function _last_name(string $last_name) : Account_SaveProfileInfo
    {
        $this->params['last_name'] = $last_name;
        return $this;
    }
    /**
     * User maiden name (female only)
     *
     * {"type":"string"}
     */
    public function _maiden_name(string $maiden_name) : Account_SaveProfileInfo
    {
        $this->params['maiden_name'] = $maiden_name;
        return $this;
    }
    /**
     * User screen name.
     *
     * {"type":"string"}
     */
    public function _screen_name(string $screen_name) : Account_SaveProfileInfo
    {
        $this->params['screen_name'] = $screen_name;
        return $this;
    }
    /**
     * ID of the name change request to be canceled. If this parameter is sent, all the others are ignored.
     *
     * {"type":"int","minimum":0}
     */
    public function _cancel_request_id(int $cancel_request_id) : Account_SaveProfileInfo
    {
        $this->params['cancel_request_id'] = $cancel_request_id;
        return $this;
    }
    /**
     * User sex. Possible values: , * '1' – female,, * '2' – male.
     *
     * {"type":"int","minimum":0,"enum":[0,1,2],"enumNames":["undefined","female","male"]}
     */
    public function _sex(int $sex) : Account_SaveProfileInfo
    {
        $this->params['sex'] = $sex;
        return $this;
    }
    /**
     * User relationship status. Possible values: , * '1' – single,, * '2' – in a relationship,, * '3' – engaged,, * '4' – married,, * '5' – it's complicated,, * '6' – actively searching,, * '7' – in love,, * '0' – not specified.
     *
     * {"type":"int","minimum":0,"enum":[1,2,3,4,5,6,7,0],"enumNames":["single","relationship","engaged","married","complicated","actively searching","in love","not specified"]}
     */
    public function _relation(int $relation) : Account_SaveProfileInfo
    {
        $this->params['relation'] = $relation;
        return $this;
    }
    /**
     * ID of the relationship partner.
     *
     * {"type":"int","minimum":0}
     */
    public function _relation_partner_id(int $relation_partner_id) : Account_SaveProfileInfo
    {
        $this->params['relation_partner_id'] = $relation_partner_id;
        return $this;
    }
    /**
     * User birth date, format: DD.MM.YYYY.
     *
     * {"type":"string"}
     */
    public function _bdate(string $bdate) : Account_SaveProfileInfo
    {
        $this->params['bdate'] = $bdate;
        return $this;
    }
    /**
     * Birth date visibility. Returned values: , * '1' – show birth date,, * '2' – show only month and day,, * '0' – hide birth date.
     *
     * {"type":"int","minimum":0,"enum":[1,2,0],"enumNames":["show","hide year","hide"]}
     */
    public function _bdate_visibility(int $bdate_visibility) : Account_SaveProfileInfo
    {
        $this->params['bdate_visibility'] = $bdate_visibility;
        return $this;
    }
    /**
     * User home town.
     *
     * {"type":"string"}
     */
    public function _home_town(string $home_town) : Account_SaveProfileInfo
    {
        $this->params['home_town'] = $home_town;
        return $this;
    }
    /**
     * User country.
     *
     * {"type":"int","minimum":0}
     */
    public function _country_id(int $country_id) : Account_SaveProfileInfo
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * User city.
     *
     * {"type":"int","minimum":0}
     */
    public function _city_id(int $city_id) : Account_SaveProfileInfo
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * Status text.
     *
     * {"type":"string"}
     */
    public function _status(string $status) : Account_SaveProfileInfo
    {
        $this->params['status'] = $status;
        return $this;
    }
}