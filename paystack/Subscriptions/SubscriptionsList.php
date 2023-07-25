<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 8:29 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Subscriptions;

use Maatify\PayStack\ParamsSetter;

class SubscriptionsList extends ParamsSetter
{
    /**
     * Query Parameters
     *
     * - perPage    Integer     Specify how many records you want to retrieve per page. If not specify we use a default value of 50.
     *
     * - page       Integer     Specify exactly what page you want to retrieve. If not specify we use a default value of 1.
     *
     * - customer   Integer     Filter by Customer ID.
     *
     * - plan       Integer     Filter by Plan ID.
     *
     */

    public function Execute()
    {
        $this->call_url = $this->api_subscription_url;
        return $this->CurlGet();
    }

}