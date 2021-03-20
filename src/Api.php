<?php

namespace VkApigen;

use GuzzleHttp\Client;
class Api
{
    const VERSION = '5.130.0';
    protected $client;
    protected $defaultQuery;
    protected $accessTokenType;
    public function __construct(string $accessToken, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        $this->defaultQuery = ['v' => self::VERSION, 'access_token' => $accessToken];
        $this->client = new Client(['base_uri' => 'https://api.vk.com/method/']);
    }
    public function execute(string $code)
    {
        $params = array_merge($this->defaultQuery, ['code' => $code]);
        return $this->client->get('execute', ['query' => $params]);
    }
    public function account() : Domain\Account
    {
        return new Domain\Account($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function ads() : Domain\Ads
    {
        return new Domain\Ads($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function adsweb() : Domain\Adsweb
    {
        return new Domain\Adsweb($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function appWidgets() : Domain\AppWidgets
    {
        return new Domain\AppWidgets($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function apps() : Domain\Apps
    {
        return new Domain\Apps($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function auth() : Domain\Auth
    {
        return new Domain\Auth($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function board() : Domain\Board
    {
        return new Domain\Board($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function database() : Domain\Database
    {
        return new Domain\Database($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function docs() : Domain\Docs
    {
        return new Domain\Docs($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function donut() : Domain\Donut
    {
        return new Domain\Donut($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function downloadedGames() : Domain\DownloadedGames
    {
        return new Domain\DownloadedGames($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function fave() : Domain\Fave
    {
        return new Domain\Fave($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function friends() : Domain\Friends
    {
        return new Domain\Friends($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function gifts() : Domain\Gifts
    {
        return new Domain\Gifts($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function groups() : Domain\Groups
    {
        return new Domain\Groups($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function likes() : Domain\Likes
    {
        return new Domain\Likes($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function market() : Domain\Market
    {
        return new Domain\Market($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function messages() : Domain\Messages
    {
        return new Domain\Messages($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function newsfeed() : Domain\Newsfeed
    {
        return new Domain\Newsfeed($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function notes() : Domain\Notes
    {
        return new Domain\Notes($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function notifications() : Domain\Notifications
    {
        return new Domain\Notifications($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function orders() : Domain\Orders
    {
        return new Domain\Orders($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function pages() : Domain\Pages
    {
        return new Domain\Pages($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function photos() : Domain\Photos
    {
        return new Domain\Photos($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function podcasts() : Domain\Podcasts
    {
        return new Domain\Podcasts($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function polls() : Domain\Polls
    {
        return new Domain\Polls($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function prettyCards() : Domain\PrettyCards
    {
        return new Domain\PrettyCards($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Domain\Search
    {
        return new Domain\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function secure() : Domain\Secure
    {
        return new Domain\Secure($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function stats() : Domain\Stats
    {
        return new Domain\Stats($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function status() : Domain\Status
    {
        return new Domain\Status($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function storage() : Domain\Storage
    {
        return new Domain\Storage($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function store() : Domain\Store
    {
        return new Domain\Store($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function stories() : Domain\Stories
    {
        return new Domain\Stories($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function streaming() : Domain\Streaming
    {
        return new Domain\Streaming($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function users() : Domain\Users
    {
        return new Domain\Users($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function utils() : Domain\Utils
    {
        return new Domain\Utils($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function video() : Domain\Video
    {
        return new Domain\Video($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function wall() : Domain\Wall
    {
        return new Domain\Wall($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function widgets() : Domain\Widgets
    {
        return new Domain\Widgets($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}