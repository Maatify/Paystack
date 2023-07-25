<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 6:32 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Plans;

use Maatify\PayStack\ParamsSetter;

class PlansList extends ParamsSetter
{
    /**
     * Query Parameters
     *
     * - perPage    Integer     Specify how many records you want to retrieve per page. If not specify we use a default value of 50.
     *
     * - page       Integer     Specify exactly what page you want to retrieve. If not specify we use a default value of 1.
     *
     * - status     String      Filter list by plans with specified status.
     *
     * - interval   Filter      list by plans with specified interval.
     *
     * - amount     Integer     Filter list by plans with specified amount ( kobo if currency is NGN, pesewas, if currency is GHS, and cents, if currency is ZAR).
     *
     */


    public function Execute()
    {
        $this->call_url = $this->api_plan_url;
        return $this->CurlGet();
    }
}