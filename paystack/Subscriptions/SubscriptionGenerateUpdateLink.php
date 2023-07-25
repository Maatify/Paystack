<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 9:03 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Subscriptions;

use Maatify\PayStack\Request;

class SubscriptionGenerateUpdateLink extends Request
{
    public function Execute(string $subscription_code)
    {
        $this->call_url = $this->api_subscription_url . '/' . $subscription_code . '/manage/link';
        return $this->CurlGet();
    }

}