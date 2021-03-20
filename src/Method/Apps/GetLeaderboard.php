<?php

namespace VkApigen\Method\Apps;

/**
 * Returns players rating in the game.
 */
class GetLeaderboard extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.getLeaderboard');
    }
    /**
     * Leaderboard type. Possible values: *'level' — by level,, *'points' — by mission points,, *'score' — by score ().
     *
     * {"type":"string","enum":["level","points","score"]}
     */
    public function type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Rating type. Possible values: *'1' — global rating among all players,, *'0' — rating among user friends.
     *
     * {"type":"bool","default":1}
     */
    public function _global(bool $global) : self
    {
        $this->params['global'] = $global;
        return $this;
    }
    /**
     * 1 — to return additional info about users
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}