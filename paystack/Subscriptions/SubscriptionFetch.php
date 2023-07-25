<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 8:43 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Subscriptions;

use Maatify\PayStack\Request;

class SubscriptionFetch extends Request
{
    public function Execute(int|string $id_or_code)
    {
        $this->call_url = $this->api_subscription_url . '/' . $id_or_code;
        return $this->CurlGet();
    }
}