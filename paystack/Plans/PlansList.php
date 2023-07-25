<?php

/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 6:32 PM
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