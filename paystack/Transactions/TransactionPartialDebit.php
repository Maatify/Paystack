<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-22
 * Time: 1:56 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Transactions;

use Maatify\PayStack\ParamsSetter;

class TransactionPartialDebit extends ParamsSetter
{
    /**
     * Body Parameters
     *
     * - reference      String      Unique transaction reference. Only -, ., = and alphanumeric characters allowed.
     *
     * - at_least       String      Minimum amount to charge
     *
     */

    public function Execute(string $email, int $amount, string $currency, string $authorization_code)
    {
        $this->call_url = $this->api_transaction_url . '/partial_debit';
        $this->params['authorization_code'] = $authorization_code;
        $this->params['currency'] = $currency;
        $this->params['amount'] = $amount;
        $this->params['email'] = $email;
        return $this->CurlPost();

    }
}