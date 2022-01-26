<?php

namespace VkApigen\Method\Users;

/**
 * Returns a list of users matching the search criteria.
 */
class Search extends \VkApigen\BaseMethod
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
        return $this->onCall('users.search');
    }
    /**
     * Search query string (e.g., 'Vasya Babich').
     *
     * {"type":"string"}
     */
    public function _q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Sort order: '1' — by date registered, '0' — by rating
     *
     * {"type":"int","enum":[0,1],"enumNames":["by rating","by date registered"]}
     */
    public function _sort(int $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of users.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of users to return.
     *
     * {"type":"int","default":20,"minimum":0,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online',
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _city(int $city) : self
    {
        $this->params['city'] = $city;
        return $this;
    }
    /**
     * Country ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _country(int $country) : self
    {
        $this->params['country'] = $country;
        return $this;
    }
    /**
     * City name in a string.
     *
     * {"type":"string"}
     */
    public function _hometown(string $hometown) : self
    {
        $this->params['hometown'] = $hometown;
        return $this;
    }
    /**
     * ID of the country where the user graduated.
     *
     * {"type":"int","minimum":0}
     */
    public function _university_country(int $university_country) : self
    {
        $this->params['university_country'] = $university_country;
        return $this;
    }
    /**
     * ID of the institution of higher education.
     *
     * {"type":"int","minimum":0}
     */
    public function _university(int $university) : self
    {
        $this->params['university'] = $university;
        return $this;
    }
    /**
     * Year of graduation from an institution of higher education.
     *
     * {"type":"int","minimum":0}
     */
    public function _university_year(int $university_year) : self
    {
        $this->params['university_year'] = $university_year;
        return $this;
    }
    /**
     * Faculty ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _university_faculty(int $university_faculty) : self
    {
        $this->params['university_faculty'] = $university_faculty;
        return $this;
    }
    /**
     * Chair ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _university_chair(int $university_chair) : self
    {
        $this->params['university_chair'] = $university_chair;
        return $this;
    }
    /**
     * '1' — female, '2' — male, '0' — any (default)
     *
     * {"type":"int","minimum":0,"enum":[0,1,2],"enumNames":["any","female","male"]}
     */
    public function _sex(int $sex) : self
    {
        $this->params['sex'] = $sex;
        return $this;
    }
    /**
     * Relationship status: '1' — Not married, '2' — In a relationship, '3' — Engaged, '4' — Married, '5' — It's complicated, '6' — Actively searching, '7' — In love
     *
     * {"type":"int","minimum":0,"enum":[0,1,2,3,4,5,6,7],"enumNames":["not specified","not married","relationship","engaged","married","complicated","actively searching","in love"]}
     */
    public function _status(int $status) : self
    {
        $this->params['status'] = $status;
        return $this;
    }
    /**
     * Minimum age.
     *
     * {"type":"int","minimum":0}
     */
    public function _age_from(int $age_from) : self
    {
        $this->params['age_from'] = $age_from;
        return $this;
    }
    /**
     * Maximum age.
     *
     * {"type":"int","minimum":0}
     */
    public function _age_to(int $age_to) : self
    {
        $this->params['age_to'] = $age_to;
        return $this;
    }
    /**
     * Day of birth.
     *
     * {"type":"int","minimum":0}
     */
    public function _birth_day(int $birth_day) : self
    {
        $this->params['birth_day'] = $birth_day;
        return $this;
    }
    /**
     * Month of birth.
     *
     * {"type":"int","minimum":0}
     */
    public function _birth_month(int $birth_month) : self
    {
        $this->params['birth_month'] = $birth_month;
        return $this;
    }
    /**
     * Year of birth.
     *
     * {"type":"int","minimum":1900,"maximum":2100}
     */
    public function _birth_year(int $birth_year) : self
    {
        $this->params['birth_year'] = $birth_year;
        return $this;
    }
    /**
     * '1' — online only, '0' — all users
     *
     * {"type":"bool"}
     */
    public function _online(bool $online) : self
    {
        $this->params['online'] = $online;
        return $this;
    }
    /**
     * '1' — with photo only, '0' — all users
     *
     * {"type":"bool"}
     */
    public function _has_photo(bool $has_photo) : self
    {
        $this->params['has_photo'] = $has_photo;
        return $this;
    }
    /**
     * ID of the country where users finished school.
     *
     * {"type":"int","minimum":0}
     */
    public function _school_country(int $school_country) : self
    {
        $this->params['school_country'] = $school_country;
        return $this;
    }
    /**
     * ID of the city where users finished school.
     *
     * {"type":"int","minimum":0}
     */
    public function _school_city(int $school_city) : self
    {
        $this->params['school_city'] = $school_city;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _school_class(int $school_class) : self
    {
        $this->params['school_class'] = $school_class;
        return $this;
    }
    /**
     * ID of the school.
     *
     * {"type":"int","minimum":0}
     */
    public function _school(int $school) : self
    {
        $this->params['school'] = $school;
        return $this;
    }
    /**
     * School graduation year.
     *
     * {"type":"int","minimum":0}
     */
    public function _school_year(int $school_year) : self
    {
        $this->params['school_year'] = $school_year;
        return $this;
    }
    /**
     * Users' religious affiliation.
     *
     * {"type":"string"}
     */
    public function _religion(string $religion) : self
    {
        $this->params['religion'] = $religion;
        return $this;
    }
    /**
     * Name of the company where users work.
     *
     * {"type":"string"}
     */
    public function _company(string $company) : self
    {
        $this->params['company'] = $company;
        return $this;
    }
    /**
     * Job position.
     *
     * {"type":"string"}
     */
    public function _position(string $position) : self
    {
        $this->params['position'] = $position;
        return $this;
    }
    /**
     * ID of a community to search in communities.
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _from_list(array $from_list) : self
    {
        $this->params['from_list'] = $from_list;
        return $this;
    }
}