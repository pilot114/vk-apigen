<?php

namespace VkApigen\Method\Stories;

/**
 * Returns story by its ID.
 */
class GetById extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('stories.getById');
    }
    /**
     * Stories IDs separated by commas. Use format {owner_id}+'_'+{story_id}, for example, 12345_54331.
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function stories(array $stories) : self
    {
        $this->params['stories'] = $stories;
        return $this;
    }
    /**
     * '1' — to return additional fields for users and communities. Default value is 0.
     *
     * {"type":"bool","default":false}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Additional fields to return
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/base_user_group_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}