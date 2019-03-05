<?php

namespace VkApigen\Method\Ads;

/**
 * Returns statistics of performance indicators for ads, campaigns, clients or the whole account.
 */
class GetStatistics extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getStatistics');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : self
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Type of requested objects listed in 'ids' parameter: *ad — ads,, *campaign — campaigns,, *client — clients,, *office — account.
     *
     * {"type":"string","enum":["ad","campaign","client","office"]}
     */
    public function ids_type(string $ids_type) : self
    {
        $this->params['ids_type'] = $ids_type;
        return $this;
    }
    /**
     * IDs requested ads, campaigns, clients or account, separated with a comma, depending on the value set in 'ids_type'. Maximum 2000 objects.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : self
    {
        $this->params['ids'] = $ids;
        return $this;
    }
    /**
     * Data grouping by dates: *day — statistics by days,, *month — statistics by months,, *overall — overall statistics. 'date_from' and 'date_to' parameters set temporary limits.
     *
     * {"type":"string","enum":["day","month","overall"]}
     */
    public function period(string $period) : self
    {
        $this->params['period'] = $period;
        return $this;
    }
    /**
     * Date to show statistics from. For different value of 'period' different date format is used: *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011, **0 — day it was created on,, *month: YYYY-MM, example: 2011-09 — September 2011, **0 — month it was created in,, *overall: 0.
     *
     * {"type":"string"}
     */
    public function date_from(string $date_from) : self
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * Date to show statistics to. For different value of 'period' different date format is used: *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011, **0 — current day,, *month: YYYY-MM, example: 2011-09 — September 2011, **0 — current month,, *overall: 0.
     *
     * {"type":"string"}
     */
    public function date_to(string $date_to) : self
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
}