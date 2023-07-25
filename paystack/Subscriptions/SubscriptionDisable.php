<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 8:58 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Subscriptions;

use Maatify\PayStack\Request;

class SubscriptionDisable extends Request
{
    public function Execute(string $subscription_code, string $email_token)
    {
        $this->call_url = $this->api_subscription_url . '/disable';
        $this->params = [
            'code' => $subscription_code,
            'token' => $email_token,
        ];
        return $this->CurlPost();
    }
}