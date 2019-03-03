<?php

namespace VkApigen\Method;

/**
 * Returns the server address for photo upload in a private message for a user.
 */
class Photos_GetMessagesUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getMessagesUploadServer');
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'Chat ID', e.g. '2000000001'. For community: '- Community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Photos_GetMessagesUploadServer
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
}