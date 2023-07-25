<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 10:23 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Transactions;

use Maatify\PayStack\Request;

class TransactionViewTimeline extends Request
{
    public function Execute(int $transaction_id)
    {
        $this->call_url = $this->api_transaction_url . '/timeline/' . $transaction_id;
        return $this->CurlGet();
    }
}