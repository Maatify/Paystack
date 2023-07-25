<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 11:50 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Customers;

use Maatify\PayStack\ParamsSetter;

class CustomerCreate extends ParamsSetter
{
    /**
     * Body Parameters
     *
     * - email          String      Customer's email address.
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
    public function Execute(string $email)
    {
        $this->call_url = $this->api_customer_url;
        $this->params['email'] = $email;
        return $this->CurlPost();
    }
}