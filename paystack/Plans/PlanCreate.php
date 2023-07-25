<?php

/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 4:35 PM
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

class PlanCreate extends ParamsSetter
{
    /**
     * Body Parameters
     *
     * - description    String      A description for this plan.
     *
     * - send_invoices  Boolean     Set to false if you don't want invoices to be sent to your customers.
     *
     * - send_sms       String      Set to false if you don't want text messages to be sent to your customers.
     *
     * - currency       String      Currency in which amount is set. Allowed values are NGN, GHS, ZAR or USD.
     *
     * - invoice_limit  Integer     Number of invoices to raise during subscription to this plan. Can be overridden by specifying an invoice_limit while subscribing.
     *
     * 
     */

    public function Execute(string $name,int $amount)
    {
        $this->call_url = $this->api_plan_url;
        $this->params['name'] = $name;
        $this->params['amount'] = $amount;
        if(empty($this->params['interval'])){
            $this->params['interval'] = 'monthly';
        }
        return $this->CurlPost();
    }

    public function Daily(): static
    {
        $this->params['interval'] = 'daily';
        return $this;
    }

    public function Weekly(): static
    {
        $this->params['interval'] = 'weekly';
        return $this;
    }

    public function Monthly(): static
    {
        $this->params['interval'] = 'monthly';
        return $this;
    }

    public function Quarterly(): static
    {
        $this->params['interval'] = 'quarterly';
        return $this;
    }

    public function Biannually(): static
    {
        $this->params['interval'] = 'biannually'; // (every 6 months)
        return $this;
    }

    public function Annually(): static
    {
        $this->params['interval'] = 'annually';
        return $this;
    }
}