<?php

namespace VkApigen\Method\Database;

/**
 * Returns a list of school classes specified for the country.
 */
class GetSchoolClasses extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('database.getSchoolClasses');
    }
    /**
     * Country ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _country_id(int $country_id) : self
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
}