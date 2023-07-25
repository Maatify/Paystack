<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-22
 * Time: 1:42 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Transactions;

use Maatify\PayStack\ParamsSetter;

class TransactionExport extends ParamsSetter
{
    /**
     * Query Parameters
     *
     * - perPage        Integer     Specify how many records you want to retrieve per page. If not specify we use a default value of 50.
     *
     * - page           Integer     Specify exactly what page you want to retrieve. If not specify we use a default value of 1.
     *
     * - from           Datetime    A timestamp from which to start listing transaction e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
     *
     * - to             Datetime    A timestamp at which to stop listing transaction e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
     *
     * - customer       Integer     Specify an ID for the customer whose transactions you want to retrieve
     *
     * - status         String      Filter transactions by status ('failed', 'success', 'abandoned')
     *
     * - currency       String      Specify the transaction currency to export. Allowed values are: in kobo if currency is NGN, pesewas, if currency is GHS, and cents, if currency is ZAR
     *
     * - amount         Integer     Filter transactions by amount. Specify the amount, in kobo if currency is NGN, pesewas, if currency is GHS, and cents, if currency is ZAR
     *
     * - settled        Boolean     Set to true to export only settled transactions. false for pending transactions. Leave undefined to export all transactions
     *
     * - settlement     Integer     An ID for the settlement whose transactions we should export
     *
     * - payment_page   Integer     Specify a payment page's id to export only transactions conducted on said page
     *
     */
    public function Execute()
    {
        $this->call_url = $this->api_transaction_url . '/export';
        return $this->CurlGet();
    }
}