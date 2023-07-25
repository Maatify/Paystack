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

class TransactionChargeAuthorization extends ParamsSetter
{
    /**
     * Body Parameters
     *
     * - reference  String  Unique transaction reference. Only -, ., = and alphanumeric characters allowed.
     *
     * - currency    String  Currency in which amount should be charged. Allowed values are: NGN, GHS, ZAR or USD
     *
     * - metadata    String  Stringified JSON object. Add a custom_fields attribute which has an array of objects if you would like the fields to be added to your transaction when displayed on the dashboard. Sample: {"custom_fields":[{"display_name":"Cart ID","variable_name": "cart_id","value": "8393"}]}
     *
     * - channels    Array   Send us 'card' or 'bank' or 'card','bank' as an array to specify what options to show the user paying
     *
     * - subaccount  String  The code for the subaccount that owns the payment. e.g. ACCT_8f4s1eq7ml6rlzj
     *
     * - transaction_charge  Integer A flat fee to charge the subaccount for this transaction (in kobo if currency is NGN, pesewas, if currency is GHS, and cents, if currency is ZAR). This overrides the split percentage set when the subaccount was created. Ideally, you will need to use this if you are splitting in flat rates (since subaccount creation only allows for percentage split). e.g. 7000 for a 70 naira flat fee.
     *
     * - bearer  String  Who bears Paystack charges? account or subaccount (defaults to account).
     *
     * - queue   Boolean If you are making a scheduled charge call, it is a good idea to queue them so the processing system does not get overloaded causing transaction processing errors. Send queue:true to take advantage of our queued charging.
     *
     */
    public function Execute(string $email, int $amount, string $authorization_code)
    {
        $this->call_url = $this->api_transaction_url . '/charge_authorization';
        $this->params['amount'] = $amount;
        $this->params['email'] = $email;
        $this->params['authorization_code'] = $authorization_code;
        return $this->CurlPost();
    }
}