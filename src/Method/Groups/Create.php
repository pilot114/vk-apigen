<?php

namespace VkApigen\Method\Groups;

/**
 * Creates a new community.
 */
class Create extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.create');
    }
    /**
     * Community title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Community description (ignored for 'type' = 'public').
     *
     * {"type":"string"}
     */
    public function _description(string $description) : self
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Community type. Possible values: *'group' - group,, *'event' - event,, *'public' - public page
     *
     * {"type":"string","default":"group","enum":["event","group","public"]}
     */
    public function _type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Category ID (for 'type' = 'public' only).
     *
     * {"type":"int","minimum":0}
     */
    public function _public_category(int $public_category) : self
    {
        $this->params['public_category'] = $public_category;
        return $this;
    }
    /**
     * Public page subcategory ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _public_subcategory(int $public_subcategory) : self
    {
        $this->params['public_subcategory'] = $public_subcategory;
        return $this;
    }
    /**
     * Public page subtype. Possible values: *'1' - place or small business,, *'2' - company, organization or website,, *'3' - famous person or group of people,, *'4' - product or work of art.
     *
     * {"type":"int","minimum":0,"enum":[1,2,3,4],"enumNames":["place or business","company or website","person or group","product or art"]}
     */
    public function _subtype(int $subtype) : self
    {
        $this->params['subtype'] = $subtype;
        return $this;
    }
}