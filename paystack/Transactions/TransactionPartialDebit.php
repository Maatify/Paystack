<?php
/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 1:56 PM
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