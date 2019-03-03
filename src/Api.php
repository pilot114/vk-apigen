<?php

namespace VkApigen;

use GuzzleHttp\Client;
class Api
{
    const VERSION = '5.80.1';
    protected $client;
    protected $defaultQuery;
    public function __construct(string $accessToken)
    {
        $this->defaultQuery = array('v' => self::VERSION, 'access_token' => $accessToken);
        $this->client = new Client(array('base_uri' => 'https://api.vk.com/method/'));
    }
    public function users() : Domain\Users
    {
        return new Domain\Users($this->client, $this->defaultQuery);
    }
    public function auth() : Domain\Auth
    {
        return new Domain\Auth($this->client, $this->defaultQuery);
    }
    public function wall() : Domain\Wall
    {
        return new Domain\Wall($this->client, $this->defaultQuery);
    }
    public function photos() : Domain\Photos
    {
        return new Domain\Photos($this->client, $this->defaultQuery);
    }
    public function friends() : Domain\Friends
    {
        return new Domain\Friends($this->client, $this->defaultQuery);
    }
    public function widgets() : Domain\Widgets
    {
        return new Domain\Widgets($this->client, $this->defaultQuery);
    }
    public function stories() : Domain\Stories
    {
        return new Domain\Stories($this->client, $this->defaultQuery);
    }
    public function secure() : Domain\Secure
    {
        return new Domain\Secure($this->client, $this->defaultQuery);
    }
    public function streaming() : Domain\Streaming
    {
        return new Domain\Streaming($this->client, $this->defaultQuery);
    }
    public function storage() : Domain\Storage
    {
        return new Domain\Storage($this->client, $this->defaultQuery);
    }
    public function orders() : Domain\Orders
    {
        return new Domain\Orders($this->client, $this->defaultQuery);
    }
    public function status() : Domain\Status
    {
        return new Domain\Status($this->client, $this->defaultQuery);
    }
    public function leads() : Domain\Leads
    {
        return new Domain\Leads($this->client, $this->defaultQuery);
    }
    public function pages() : Domain\Pages
    {
        return new Domain\Pages($this->client, $this->defaultQuery);
    }
    public function groups() : Domain\Groups
    {
        return new Domain\Groups($this->client, $this->defaultQuery);
    }
    public function board() : Domain\Board
    {
        return new Domain\Board($this->client, $this->defaultQuery);
    }
    public function video() : Domain\Video
    {
        return new Domain\Video($this->client, $this->defaultQuery);
    }
    public function notes() : Domain\Notes
    {
        return new Domain\Notes($this->client, $this->defaultQuery);
    }
    public function places() : Domain\Places
    {
        return new Domain\Places($this->client, $this->defaultQuery);
    }
    public function account() : Domain\Account
    {
        return new Domain\Account($this->client, $this->defaultQuery);
    }
    public function messages() : Domain\Messages
    {
        return new Domain\Messages($this->client, $this->defaultQuery);
    }
    public function newsfeed() : Domain\Newsfeed
    {
        return new Domain\Newsfeed($this->client, $this->defaultQuery);
    }
    public function likes() : Domain\Likes
    {
        return new Domain\Likes($this->client, $this->defaultQuery);
    }
    public function polls() : Domain\Polls
    {
        return new Domain\Polls($this->client, $this->defaultQuery);
    }
    public function docs() : Domain\Docs
    {
        return new Domain\Docs($this->client, $this->defaultQuery);
    }
    public function fave() : Domain\Fave
    {
        return new Domain\Fave($this->client, $this->defaultQuery);
    }
    public function notifications() : Domain\Notifications
    {
        return new Domain\Notifications($this->client, $this->defaultQuery);
    }
    public function stats() : Domain\Stats
    {
        return new Domain\Stats($this->client, $this->defaultQuery);
    }
    public function search() : Domain\Search
    {
        return new Domain\Search($this->client, $this->defaultQuery);
    }
    public function apps() : Domain\Apps
    {
        return new Domain\Apps($this->client, $this->defaultQuery);
    }
    public function utils() : Domain\Utils
    {
        return new Domain\Utils($this->client, $this->defaultQuery);
    }
    public function database() : Domain\Database
    {
        return new Domain\Database($this->client, $this->defaultQuery);
    }
    public function gifts() : Domain\Gifts
    {
        return new Domain\Gifts($this->client, $this->defaultQuery);
    }
    public function ads() : Domain\Ads
    {
        return new Domain\Ads($this->client, $this->defaultQuery);
    }
    public function market() : Domain\Market
    {
        return new Domain\Market($this->client, $this->defaultQuery);
    }
}