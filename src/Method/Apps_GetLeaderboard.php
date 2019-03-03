<?php

namespace VkApigen\Method;

/**
 * Returns players rating in the game.
 */
class Apps_GetLeaderboard extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.getLeaderboard');
    }
    /**
     * Leaderboard type. Possible values: *'level' — by level,, *'points' — by mission points,, *'score' — by score ().
     *
     * {"type":"string","enum":["level","points","score"]}
     */
    public function type(string $type) : Apps_GetLeaderboard
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Rating type. Possible values: *'1' — global rating among all players,, *'0' — rating among user friends.
     *
     * {"type":"bool","default":1}
     */
    public function _global(bool $global) : Apps_GetLeaderboard
    {
        $this->params['global'] = $global;
        return $this;
    }
    /**
     * 1 — to return additional info about users
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Apps_GetLeaderboard
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}