<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Database
{
    protected $client;
    protected $defaultQuery;
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getCountries() : Method\Database\GetCountries
    {
        return new Method\Database\GetCountries($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getRegions() : Method\Database\GetRegions
    {
        return new Method\Database\GetRegions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getStreetsById() : Method\Database\GetStreetsById
    {
        return new Method\Database\GetStreetsById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCountriesById() : Method\Database\GetCountriesById
    {
        return new Method\Database\GetCountriesById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCities() : Method\Database\GetCities
    {
        return new Method\Database\GetCities($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCitiesById() : Method\Database\GetCitiesById
    {
        return new Method\Database\GetCitiesById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUniversities() : Method\Database\GetUniversities
    {
        return new Method\Database\GetUniversities($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSchools() : Method\Database\GetSchools
    {
        return new Method\Database\GetSchools($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSchoolClasses() : Method\Database\GetSchoolClasses
    {
        return new Method\Database\GetSchoolClasses($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getFaculties() : Method\Database\GetFaculties
    {
        return new Method\Database\GetFaculties($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getChairs() : Method\Database\GetChairs
    {
        return new Method\Database\GetChairs($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}