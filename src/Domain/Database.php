<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Database
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getCountries() : Method\Database_GetCountries
    {
        return new Method\Database_GetCountries($this->client, $this->defaultQuery);
    }
    public function getRegions() : Method\Database_GetRegions
    {
        return new Method\Database_GetRegions($this->client, $this->defaultQuery);
    }
    public function getStreetsById() : Method\Database_GetStreetsById
    {
        return new Method\Database_GetStreetsById($this->client, $this->defaultQuery);
    }
    public function getCountriesById() : Method\Database_GetCountriesById
    {
        return new Method\Database_GetCountriesById($this->client, $this->defaultQuery);
    }
    public function getCities() : Method\Database_GetCities
    {
        return new Method\Database_GetCities($this->client, $this->defaultQuery);
    }
    public function getCitiesById() : Method\Database_GetCitiesById
    {
        return new Method\Database_GetCitiesById($this->client, $this->defaultQuery);
    }
    public function getUniversities() : Method\Database_GetUniversities
    {
        return new Method\Database_GetUniversities($this->client, $this->defaultQuery);
    }
    public function getSchools() : Method\Database_GetSchools
    {
        return new Method\Database_GetSchools($this->client, $this->defaultQuery);
    }
    public function getSchoolClasses() : Method\Database_GetSchoolClasses
    {
        return new Method\Database_GetSchoolClasses($this->client, $this->defaultQuery);
    }
    public function getFaculties() : Method\Database_GetFaculties
    {
        return new Method\Database_GetFaculties($this->client, $this->defaultQuery);
    }
    public function getChairs() : Method\Database_GetChairs
    {
        return new Method\Database_GetChairs($this->client, $this->defaultQuery);
    }
}