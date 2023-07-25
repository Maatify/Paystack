<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-25
 * Time: 12:47 AM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Customers;

use Maatify\PayStack\ParamsSetter;

class CustomerUpdate extends ParamsSetter
{
    /**
     * Body Parameters
     *
     * - first_name     String      Customer's first name.
     *
     * - last_name      String      Customer's last name.
     *
     * - phone          String      Customer's phone number.
     *
     * - metadata       Object      A set of key/value pairs that you can attach to the customer. It can be used to store additional information in a structured format..
     *
     */
    public function Execute(string $code)
    {
        $this->call_url = $this->api_customer_url . '/' . $code;
        return $this->CurlPut();
    }
}