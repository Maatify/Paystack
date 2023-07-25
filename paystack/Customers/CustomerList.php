<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-25
 * Time: 12:30 AM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Customers;

use Maatify\PayStack\ParamsSetter;

class CustomerList extends ParamsSetter
{
    /**
     * Query Parameters
     *
     * - perPage    Integer     Specify how many records you want to retrieve per page. If not specify we use a default value of 50.
     *
     * - page       Integer     Specify exactly what page you want to retrieve. If not specify we use a default value of 1.
     *
     * - from       Datetime    A timestamp from which to start listing customers e.g. 2016-09-24T00:00:05.000Z, 2016-09-21.
     *
     * - to         Datetime    A timestamp at which to stop listing customers e.g. 2016-09-24T00:00:05.000Z, 2016-09-21.
     *
     */

    public function Execute()
    {
        $this->call_url = $this->api_customer_url;
        return $this->CurlGet();
    }
}