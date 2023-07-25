<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-25
 * Time: 1:57 AM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Customers;

use Maatify\PayStack\Request;

class CustomerWhitelistBlacklist extends Request
{

    public function __construct(string $customerCode_or_email)
    {
        parent::__construct();
        $this->params['customer'] = $customerCode_or_email;
    }

    public function Default(){
        $this->params['risk_action'] = 'default';
        return $this->Execute();
    }

    public function Allow(){
        $this->params['risk_action'] = 'allow';
        return $this->Execute();
    }

    public function Deny(){
        $this->params['risk_action'] = 'deny';
        return $this->Execute();
    }

    private function Execute()
    {
        $this->call_url = $this->api_customer_url . '/set_risk_action';

        return $this->CurlPost();
    }
}