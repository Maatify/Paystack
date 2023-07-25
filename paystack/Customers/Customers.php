<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 11:48 PM
 * https://www.Maatify.dev
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