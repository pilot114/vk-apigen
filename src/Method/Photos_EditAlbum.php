<?php

namespace VkApigen\Method;

/**
 * Edits information about a photo album.
 */
class Photos_EditAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.editAlbum');
    }
    /**
     * ID of the photo album to be edited.
     *
     * {"type":"int","minimum":0}
     */
    public function album_id(int $album_id) : Photos_EditAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * New album title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Photos_EditAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * New album description.
     *
     * {"type":"string"}
     */
    public function _description(string $description) : Photos_EditAlbum
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * ID of the user or community that owns the album.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_EditAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_view(array $privacy_view) : Photos_EditAlbum
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_comment(array $privacy_comment) : Photos_EditAlbum
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _upload_by_admins_only(bool $upload_by_admins_only) : Photos_EditAlbum
    {
        $this->params['upload_by_admins_only'] = $upload_by_admins_only;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _comments_disabled(bool $comments_disabled) : Photos_EditAlbum
    {
        $this->params['comments_disabled'] = $comments_disabled;
        return $this;
    }
}