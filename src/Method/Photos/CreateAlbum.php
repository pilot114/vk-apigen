<?php

namespace VkApigen\Method\Photos;

/**
 * Creates an empty photo album.
 */
class CreateAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.createAlbum');
    }
    /**
     * Album title.
     *
     * {"type":"string","minLength":2}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * ID of the community in which the album will be created.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album description.
     *
     * {"type":"string"}
     */
    public function _description(string $description) : self
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_view(array $privacy_view) : self
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"},"default":0}
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