<?php

namespace VkApigen\Method\Groups;

/**
 * Edits a community.
 */
class Edit extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('groups.edit');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Community title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Community description.
     *
     * {"type":"string"}
     */
    public function _description(string $description) : self
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Community screen name.
     *
     * {"type":"string"}
     */
    public function _screen_name(string $screen_name) : self
    {
        $this->params['screen_name'] = $screen_name;
        return $this;
    }
    /**
     * Community type. Possible values: *'0' – open,, *'1' – closed,, *'2' – private.
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_access"}
     */
    public function _access(int $access) : self
    {
        $this->params['access'] = $access;
        return $this;
    }
    /**
     * Website that will be displayed in the community information field.
     *
     * {"type":"string"}
     */
    public function _website(string $website) : self
    {
        $this->params['website'] = $website;
        return $this;
    }
    /**
     * Community subject. Possible values: , *'1' – auto/moto,, *'2' – activity holidays,, *'3' – business,, *'4' – pets,, *'5' – health,, *'6' – dating and communication, , *'7' – games,, *'8' – IT (computers and software),, *'9' – cinema,, *'10' – beauty and fashion,, *'11' – cooking,, *'12' – art and culture,, *'13' – literature,, *'14' – mobile services and internet,, *'15' – music,, *'16' – science and technology,, *'17' – real estate,, *'18' – news and media,, *'19' – security,, *'20' – education,, *'21' – home and renovations,, *'22' – politics,, *'23' – food,, *'24' – industry,, *'25' – travel,, *'26' – work,, *'27' – entertainment,, *'28' – religion,, *'29' – family,, *'30' – sports,, *'31' – insurance,, *'32' – television,, *'33' – goods and services,, *'34' – hobbies,, *'35' – finance,, *'36' – photo,, *'37' – esoterics,, *'38' – electronics and appliances,, *'39' – erotic,, *'40' – humor,, *'41' – society, humanities,, *'42' – design and graphics.
     *
     * {"type":"string","$ref":"objects.json#\/definitions\/groups_group_subject"}
     */
    public function _subject(string $subject) : self
    {
        $this->params['subject'] = $subject;
        return $this;
    }
    /**
     * Organizer email (for events).
     *
     * {"type":"string"}
     */
    public function _email(string $email) : self
    {
        $this->params['email'] = $email;
        return $this;
    }
    /**
     * Organizer phone number (for events).
     *
     * {"type":"string"}
     */
    public function _phone(string $phone) : self
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * RSS feed address for import (available only to communities with special permission. Contact vk.com/support to get it.
     *
     * {"type":"string"}
     */
    public function _rss(string $rss) : self
    {
        $this->params['rss'] = $rss;
        return $this;
    }
    /**
     * Event start date in Unixtime format.
     *
     * {"type":"int","minimum":0}
     */
    public function _event_start_date(int $event_start_date) : self
    {
        $this->params['event_start_date'] = $event_start_date;
        return $this;
    }
    /**
     * Event finish date in Unixtime format.
     *
     * {"type":"int","minimum":0}
     */
    public function _event_finish_date(int $event_finish_date) : self
    {
        $this->params['event_finish_date'] = $event_finish_date;
        return $this;
    }
    /**
     * Organizer community ID (for events only).
     *
     * {"type":"int","minimum":0}
     */
    public function _event_group_id(int $event_group_id) : self
    {
        $this->params['event_group_id'] = $event_group_id;
        return $this;
    }
    /**
     * Public page category ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _public_category(int $public_category) : self
    {
        $this->params['public_category'] = $public_category;
        return $this;
    }
    /**
     * Public page subcategory ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _public_subcategory(int $public_subcategory) : self
    {
        $this->params['public_subcategory'] = $public_subcategory;
        return $this;
    }
    /**
     * Founding date of a company or organization owning the community in "dd.mm.YYYY" format.
     *
     * {"type":"string"}
     */
    public function _public_date(string $public_date) : self
    {
        $this->params['public_date'] = $public_date;
        return $this;
    }
    /**
     * Wall settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (groups and events only),, *'3' – closed (groups and events only).
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_wall"}
     */
    public function _wall(int $wall) : self
    {
        $this->params['wall'] = $wall;
        return $this;
    }
    /**
     * Board topics settings. Possbile values: , *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_topics"}
     */
    public function _topics(int $topics) : self
    {
        $this->params['topics'] = $topics;
        return $this;
    }
    /**
     * Photos settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_photos"}
     */
    public function _photos(int $photos) : self
    {
        $this->params['photos'] = $photos;
        return $this;
    }
    /**
     * Video settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_video"}
     */
    public function _video(int $video) : self
    {
        $this->params['video'] = $video;
        return $this;
    }
    /**
     * Audio settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_audio"}
     */
    public function _audio(int $audio) : self
    {
        $this->params['audio'] = $audio;
        return $this;
    }
    /**
     * Links settings (for public pages only). Possible values: *'0' – disabled,, *'1' – enabled.
     *
     * {"type":"bool"}
     */
    public function _links(bool $links) : self
    {
        $this->params['links'] = $links;
        return $this;
    }
    /**
     * Events settings (for public pages only). Possible values: *'0' – disabled,, *'1' – enabled.
     *
     * {"type":"bool"}
     */
    public function _events(bool $events) : self
    {
        $this->params['events'] = $events;
        return $this;
    }
    /**
     * Places settings (for public pages only). Possible values: *'0' – disabled,, *'1' – enabled.
     *
     * {"type":"bool"}
     */
    public function _places(bool $places) : self
    {
        $this->params['places'] = $places;
        return $this;
    }
    /**
     * Contacts settings (for public pages only). Possible values: *'0' – disabled,, *'1' – enabled.
     *
     * {"type":"bool"}
     */
    public function _contacts(bool $contacts) : self
    {
        $this->params['contacts'] = $contacts;
        return $this;
    }
    /**
     * Documents settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_docs"}
     */
    public function _docs(int $docs) : self
    {
        $this->params['docs'] = $docs;
        return $this;
    }
    /**
     * Wiki pages settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_wiki"}
     */
    public function _wiki(int $wiki) : self
    {
        $this->params['wiki'] = $wiki;
        return $this;
    }
    /**
     * Community messages. Possible values: *'0' — disabled,, *'1' — enabled.
     *
     * {"type":"bool"}
     */
    public function _messages(bool $messages) : self
    {
        $this->params['messages'] = $messages;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _articles(bool $articles) : self
    {
        $this->params['articles'] = $articles;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _addresses(bool $addresses) : self
    {
        $this->params['addresses'] = $addresses;
        return $this;
    }
    /**
     * Community age limits. Possible values: *'1' — no limits,, *'2' — 16+,, *'3' — 18+.
     *
     * {"type":"int","default":1,"minimum":0,"enum":[1,2,3],"$ref":"objects.json#\/definitions\/groups_group_age_limits"}
     */
    public function _age_limits(int $age_limits) : self
    {
        $this->params['age_limits'] = $age_limits;
        return $this;
    }
    /**
     * Market settings. Possible values: *'0' – disabled,, *'1' – enabled.
     *
     * {"type":"bool"}
     */
    public function _market(bool $market) : self
    {
        $this->params['market'] = $market;
        return $this;
    }
    /**
     * market comments settings. Possible values: *'0' – disabled,, *'1' – enabled.
     *
     * {"type":"bool"}
     */
    public function _market_comments(bool $market_comments) : self
    {
        $this->params['market_comments'] = $market_comments;
        return $this;
    }
    /**
     * Market delivery countries.
     *
     * {"type":"array","items":{"type":"integer"},"maxItems":10}
     */
    public function _market_country(array $market_country) : self
    {
        $this->params['market_country'] = $market_country;
        return $this;
    }
    /**
     * Market delivery cities (if only one country is specified).
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":10}
     */
    public function _market_city(array $market_city) : self
    {
        $this->params['market_city'] = $market_city;
        return $this;
    }
    /**
     * Market currency settings. Possbile values: , *'643' – Russian rubles,, *'980' – Ukrainian hryvnia,, *'398' – Kazakh tenge,, *'978' – Euro,, *'840' – US dollars
     *
     * {"type":"int","minimum":0,"$ref":"objects.json#\/definitions\/groups_group_market_currency"}
     */
    public function _market_currency(int $market_currency) : self
    {
        $this->params['market_currency'] = $market_currency;
        return $this;
    }
    /**
     * Seller contact for market. Set '0' for community messages.
     *
     * {"type":"int","minimum":0}
     */
    public function _market_contact(int $market_contact) : self
    {
        $this->params['market_contact'] = $market_contact;
        return $this;
    }
    /**
     * ID of a wiki page with market description.
     *
     * {"type":"int","minimum":0}
     */
    public function _market_wiki(int $market_wiki) : self
    {
        $this->params['market_wiki'] = $market_wiki;
        return $this;
    }
    /**
     * Obscene expressions filter in comments. Possible values: , *'0' – disabled,, *'1' – enabled.
     *
     * {"type":"bool"}
     */
    public function _obscene_filter(bool $obscene_filter) : self
    {
        $this->params['obscene_filter'] = $obscene_filter;
        return $this;
    }
    /**
     * Stopwords filter in comments. Possible values: , *'0' – disabled,, *'1' – enabled.
     *
     * {"type":"bool"}
     */
    public function _obscene_stopwords(bool $obscene_stopwords) : self
    {
        $this->params['obscene_stopwords'] = $obscene_stopwords;
        return $this;
    }
    /**
     * Keywords for stopwords filter.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _obscene_words(array $obscene_words) : self
    {
        $this->params['obscene_words'] = $obscene_words;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _main_section(int $main_section) : self
    {
        $this->params['main_section'] = $main_section;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _secondary_section(int $secondary_section) : self
    {
        $this->params['secondary_section'] = $secondary_section;
        return $this;
    }
    /**
     * Country of the community.
     *
     * {"type":"int","minimum":0}
     */
    public function _country(int $country) : self
    {
        $this->params['country'] = $country;
        return $this;
    }
    /**
     * City of the community.
     *
     * {"type":"int","minimum":0}
     */
    public function _city(int $city) : self
    {
        $this->params['city'] = $city;
        return $this;
    }
}