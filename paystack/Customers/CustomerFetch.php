<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-25
 * Time: 12:39 AM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Customers;

use Maatify\PayStack\Request;

class CustomerFetch extends Request
{
    public function Execute(string $email_or_code)
    {
        $this->call_url = $this->api_customer_url . '/' . $email_or_code;
        return $this->CurlGet();
    }
}