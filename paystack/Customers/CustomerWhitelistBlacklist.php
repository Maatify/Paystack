<?php

/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-25 1:57 AM
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