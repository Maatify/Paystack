<?php
/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-22 2:23 AM
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

class TransactionInitialize extends ParamsSetter
{

    public function Execute(string $email, int $amount, string $reference = ''): array
    {
        /**
         * Query Parameters
         *
         * - currency           (String)    The transaction currency (NGN, GHS, ZAR or USD). Defaults to your integration currency.
         *
         * - reference          (String)    Unique transaction reference. Only -, ., = and alphanumeric characters allowed.
         *
         * - callback_url       (String)    Fully qualified url, e.g. https://example.com/ . Use this to override the callback url provided on the dashboard for this transaction.
         *
         * - plan               (String)     If transaction is to create a subscription to a predefined plan, provide plan code here. This would invalidate the value provided in amount
         *
         * - invoice_limit      (Integer)    Number of times to charge customer during subscription to plan.
         *
         * - metadata           (String)     Stringified JSON object of custom data. Kindly check the Metadata page for more information.
         *
         * - channels           (Array)      An array of payment channels to control what channels you want to make available to the user to make a payment with. Available channels include: ["card", "bank", "ussd", "qr", "mobile_money", "bank_transfer", "eft"]
         *
         * - split_code         (String)     The split code of the transaction split. e.g. SPL_98WF13Eb3w.
         *
         * - subaccount         (String)     The code for the subaccount that owns the payment. e.g. ACCT_8f4s1eq7ml6rlzj.
         *
         * - transaction_charge (Integer)    An amount used to override the split configuration for a single split payment. If set, the amount specified goes to the main account regardless of the split configuration.
         *
         * - bearer             (String)     Who bears Paystack charges? account or subaccount (defaults to account).
         *
         * */

        $this->call_url = $this->api_transaction_url . '/initialize';
        $this->params['email'] = $email;
        $this->params['amount'] = $amount;
        if(!empty($reference)){
            $this->params['reference'] = $reference;
        }
        return $this->CurlPost();
    }


}