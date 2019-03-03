<?php

namespace VkApigen\Method;

/**
 * Creates a new community.
 */
class Groups_Create extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.create');
    }
    /**
     * Community title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Groups_Create
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Community description (ignored for 'type' = 'public').
     *
     * {"type":"string"}
     */
    public function _description(string $description) : Groups_Create
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Community type. Possible values: *'group' – group,, *'event' – event,, *'public' – public page
     *
     * {"type":"string","default":"group","enum":["group","public","event"]}
     */
    public function _type(string $type) : Groups_Create
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Category ID (for 'type' = 'public' only).
     *
     * {"type":"int","minimum":0}
     */
    public function _public_category(int $public_category) : Groups_Create
    {
        $this->params['public_category'] = $public_category;
        return $this;
    }
    /**
     * Public page subtype. Possible values: *'1' – place or small business,, *'2' – company, organization or website,, *'3' – famous person or group of people,, *'4' – product or work of art.
     *
     * {"type":"int","minimum":0,"enum":[1,2,3,4],"enumNames":["place or business","company or website","person or group","product or art"]}
     */
    public function _subtype(int $subtype) : Groups_Create
    {
        $this->params['subtype'] = $subtype;
        return $this;
    }
}