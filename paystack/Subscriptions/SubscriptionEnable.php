<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 8:50 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Subscriptions;

use Maatify\PayStack\Request;

class SubscriptionEnable extends Request
{

    public function Execute(string $subscription_code, string $email_token)
    {
        $this->call_url = $this->api_subscription_url . '/enable';
        $this->params = [
            'code' => $subscription_code,
            'token' => $email_token,
        ];
        return $this->CurlPost();
    }
}