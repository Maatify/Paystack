<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-25
 * Time: 2:10 AM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Customers;

use Maatify\PayStack\Request;

class CustomerDeactivateAuthorization extends Request
{
    public function Execute(string $authorization_code)
    {
        $this->call_url = $this->api_customer_url . '/deactivate_authorization';
        $this->params = [
            'authorization_code'=>$authorization_code
        ];
        return $this->CurlPost();
    }
}