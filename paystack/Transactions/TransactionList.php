<?php
/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-22 2:23 AM
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

namespace Maatify\PayStack\Transactions;

use Maatify\PayStack\ParamsSetter;

class TransactionList extends ParamsSetter
{

    /**
     * Query Parameters
     *
     * - perPage   (Integer)   -- Specify how many records you want to retrieve per page. If not specify we use a default value of 50.
     *
     * - page      (Integer)   -- Specify exactly what page you want to retrieve. If not specify we use a default value of 1.
     *
     * - customer (Integer)   -- Specify an ID for the customer whose transactions you want to retrieve
     *
     * - terminalid    (String)    -- The Terminal ID for the transactions you want to retrieve
     *
     * - status   (String)    -- Filter transactions by status ('failed', 'success', 'abandoned')
     *
     * - from (Datetime)  -- A timestamp from which to start listing transaction e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
     *
     * - to   (Datetime)  -- A timestamp at which to stop listing transaction e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
     *
     * - amount   (Integer)   -- Filter transactions by amount. Specify the amount (in kobo if currency is NGN, pesewas, if currency is GHS, and cents, if currency is ZAR)
     *
     */
    public function Execute()
    {
        $this->call_url = $this->api_transaction_url;
        return $this->CurlGet();
    }
}