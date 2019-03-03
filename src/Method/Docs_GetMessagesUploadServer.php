<?php

namespace VkApigen\Method;

/**
 * Returns the server address for document upload.
 */
class Docs_GetMessagesUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('docs.getMessagesUploadServer');
    }
    /**
     * Document type.
     *
     * {"type":"string","enum":["doc","audio_message"]}
     */
    public function _type(string $type) : Docs_GetMessagesUploadServer
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'Chat ID', e.g. '2000000001'. For community: '- Community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Docs_GetMessagesUploadServer
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
}