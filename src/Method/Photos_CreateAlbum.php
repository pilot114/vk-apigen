<?php

namespace VkApigen\Method;

/**
 * Creates an empty photo album.
 */
class Photos_CreateAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.createAlbum');
    }
    /**
     * Album title.
     *
     * {"type":"string","minLength":2}
     */
    public function title(string $title) : Photos_CreateAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * ID of the community in which the album will be created.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Photos_CreateAlbum
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album description.
     *
     * {"type":"string"}
     */
    public function _description(string $description) : Photos_CreateAlbum
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_view(array $privacy_view) : Photos_CreateAlbum
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_comment(array $privacy_comment) : Photos_CreateAlbum
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _upload_by_admins_only(bool $upload_by_admins_only) : Photos_CreateAlbum
    {
        $this->params['upload_by_admins_only'] = $upload_by_admins_only;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _comments_disabled(bool $comments_disabled) : Photos_CreateAlbum
    {
        $this->params['comments_disabled'] = $comments_disabled;
        return $this;
    }
}