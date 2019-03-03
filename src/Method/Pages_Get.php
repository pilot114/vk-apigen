<?php

namespace VkApigen\Method;

/**
 * Returns information about a wiki page.
 */
class Pages_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('pages.get');
    }
    /**
     * Page owner ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Pages_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Wiki page ID.
     *
     * {"type":"int"}
     */
    public function _page_id(int $page_id) : Pages_Get
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * '1' — to return information about a global wiki page
     *
     * {"type":"bool"}
     */
    public function _global(bool $global) : Pages_Get
    {
        $this->params['global'] = $global;
        return $this;
    }
    /**
     * '1' — resulting wiki page is a preview for the attached link
     *
     * {"type":"bool"}
     */
    public function _site_preview(bool $site_preview) : Pages_Get
    {
        $this->params['site_preview'] = $site_preview;
        return $this;
    }
    /**
     * Wiki page title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Pages_Get
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _need_source(bool $need_source) : Pages_Get
    {
        $this->params['need_source'] = $need_source;
        return $this;
    }
    /**
     * '1' — to return the page as HTML,
     *
     * {"type":"bool"}
     */
    public function _need_html(bool $need_html) : Pages_Get
    {
        $this->params['need_html'] = $need_html;
        return $this;
    }
}