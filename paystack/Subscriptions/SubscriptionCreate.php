<?php
/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 7:17 PM
 * @see         https://www.maatify.dev Maatify.com
 * @link        https://github.com/Maatify/PayStack  view project on GitHub
 * @link        https://github.com/Maatify/Logger (maatify/logger)
 * @copyright   ©2023 Maatify.dev
 * @note        This Project using for PayStack API.
 * @note        This Project extends other libraries maatify/logger.
 *
 * @note        This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

namespace Maatify\PayStack\Subscriptions;

use Maatify\PayStack\Request;

class SubscriptionCreate extends Request
{
    /**
     * Body Parameters
     *
     * - customer       String      Customer's email address or customer code.
     *
     * - plan           String      Plan code.
     *
     * - authorization  String      If customer has multiple authorizations, you can set the desired authorization you wish to use for this subscription here. If this is not supplied, the customer's most recent authorization would be used.
     *
     * - start_date     String      Set the date for the first debit. (ISO 8601 format) e.g. 2017-05-16T00:30:13+01:00.
     *
     */

    public function Execute(string $customer_email_or_code, string $plan_code, string $authorization = '', string $start_date = '')
    {
        $this->call_url = $this->api_subscription_url;
        if (empty($start_date)) {
            //            $this->params['start_date'] = (new DateTime(date('Y-m-d H:i:s', time())))->format(DateTimeInterface::ATOM);
            //            $this->params['start_date'] = date(DateTimeInterface::ATOM, time());
            $this->params['start_date'] = date('c', time());
        }
        $this->params['customer'] = $customer_email_or_code;
        $this->params['plan'] = $plan_code;
        if(!empty($authorization)) {
            $this->params['authorization'] = $authorization;
        }

        return $this->CurlPost();
    }

}