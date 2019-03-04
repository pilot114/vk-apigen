<?php

namespace VkApigen\Method\Pages;

/**
 * Returns information about a wiki page.
 */
class Get extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Wiki page ID.
     *
     * {"type":"int"}
     */
    public function _page_id(int $page_id) : self
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * '1' — to return information about a global wiki page
     *
     * {"type":"bool"}
     */
    public function _global(bool $global) : self
    {
        $this->params['global'] = $global;
        return $this;
    }
    /**
     * '1' — resulting wiki page is a preview for the attached link
     *
     * {"type":"bool"}
     */
    public function _site_preview(bool $site_preview) : self
    {
        $this->params['site_preview'] = $site_preview;
        return $this;
    }
    /**
     * Wiki page title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _need_source(bool $need_source) : self
    {
        $this->params['need_source'] = $need_source;
        return $this;
    }
    /**
     * '1' — to return the page as HTML,
     *
     * {"type":"bool"}
     */
    public function _need_html(bool $need_html) : self
    {
        $this->params['need_html'] = $need_html;
        return $this;
    }
}