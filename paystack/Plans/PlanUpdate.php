<?php

/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 6:51 PM
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

namespace Maatify\PayStack\Plans;

use Maatify\PayStack\ParamsSetter;

class PlanUpdate extends ParamsSetter
{
    /**
     * Body Parameters
     *
     * - name           String      Name of plan.
     *
     * - amount         Integer     Amount should be in kobo if currency is NGN and pesewas for GHS.
     *
     * - interval       String      Interval in words. Valid intervals are hourly, daily, weekly, monthly,quarterly, biannually (every 6 months), annually.
     *
     * - description    String      A description for this plan.
     *
     * - send_invoices  Boolean     Set to false if you don't want invoices to be sent to your customers
     *
     * - send_sms       String      Set to false if you don't want text messages to be sent to your customers
     *
     * - currency       String      Currency in which amount is set. Any of NGN, GHS, ZAR or USD
     *
     * - invoice_limit  Integer     Number of invoices to raise during subscription to this plan. Can be overridden by specifying an invoice_limit while subscribing.
     *
     *
     */

    public function Execute(int|string $id_or_code)
    {
        $this->call_url = $this->api_plan_url . '/' . $id_or_code;
        return $this->CurlPut();
    }
}