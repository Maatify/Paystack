<?php

/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 11:48 PM
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

class Customers
{
    public function CreateCustomer(): CustomerCreate
    {
        return new CustomerCreate();
    }

    public function ListCustomer(): CustomerList
    {
        return new CustomerList();
    }

    public function FetchCustomer(string $email_or_code)
    {
        return (new CustomerFetch())->Execute($email_or_code);
    }

    public function UpdateCustomer(): CustomerUpdate
    {
        return new CustomerUpdate();
    }

    public function ValidateCustomer(string $customerCode_or_customerEmail, string $country_code, string $type, string $account_number, string $bank_code, string $bvn): CustomerValidate
    {
        return new CustomerValidate($customerCode_or_customerEmail, $country_code, $type, $account_number, $bank_code, $bvn);
    }

    public function WhitelistBlacklistCustomer(string $customerCode_or_email): CustomerWhitelistBlacklist
    {
        return new CustomerWhitelistBlacklist($customerCode_or_email);
    }

    public function DeactivateAuthorization(): CustomerDeactivateAuthorization
    {
        return new CustomerDeactivateAuthorization();
    }
}