<?php

/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-25 1:22 AM
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

use Maatify\PayStack\ParamsSetter;

class CustomerValidate extends ParamsSetter
{
    private string $customer_code;

    /**
     * Body Parameters
     *
     * - first_name     String      Customer's first name.
     *
     * - last_name      String      Customer's last name.
     *
     * - type           String      Predefined types of identification. Only bank_account is supported at the moment.
     *
     * - value          String      Customer's identification number٫
     *
     * - country        String      2 letter country code of identification issuer٫
     *
     * - bvn            String      Customer's Bank Verification Number٫
     *
     * - bank_code      String      You can get the list of Bank Codes by calling the List Banks endpoint. (required if type is bank_account)٫
     *
     * - middle_name    String      Customer's bank account number. (required if type is bank_account)٫
     *
     * - account_number String      Customer's middle name٫
     *
     */

    public function __construct(string $customerCode_or_customerEmail, string $country_code, string $type, string $account_number, string $bank_code, string $bvn)
    {
        parent::__construct();
        $this->customer_code = $customerCode_or_customerEmail;
        $this->params = [
            'country' => $country_code,
            'type' => $type,
            'account_number' => $account_number,
            'bank_code' => $bank_code /*801*/,
            'bvn' => $bvn
        ];

    }


    public function Execute()
    {
        $this->call_url = $this->api_customer_url . '/' . $this->customer_code . '/identification';
        return $this->CurlPost();
    }



}