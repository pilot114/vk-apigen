<?php

namespace VkApigen\Method\Photos;

/**
 * Edits information about a photo album.
 */
class EditAlbum extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function album_id(int $album_id) : self
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * New album title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * New album description.
     *
     * {"type":"string"}
     */
    public function _description(string $description) : self
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * ID of the user or community that owns the album.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_view(array $privacy_view) : self
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_comment(array $privacy_comment) : self
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _upload_by_admins_only(bool $upload_by_admins_only) : self
    {
        $this->params['upload_by_admins_only'] = $upload_by_admins_only;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _comments_disabled(bool $comments_disabled) : self
    {
        $this->params['comments_disabled'] = $comments_disabled;
        return $this;
    }
}