<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-22
 * Time: 5:38 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Transactions;

class Transaction
{
    public function Initialize(): TransactionInitialize
    {
        return new TransactionInitialize();
    }
    public function Verify(string $reference): array
    {
        return (new TransactionVerify())->Execute($reference);
    }

    public function List(): TransactionList
    {
        return new TransactionList();
    }

    public function Fetch(int $transaction_id): array
    {
        return (new TransactionFetch())->Execute($transaction_id);
    }

    public function ChargeAuthorization(): TransactionChargeAuthorization
    {
        return new TransactionChargeAuthorization();
    }

    public function Total(): TransactionTotals
    {
        return new TransactionTotals();
    }

    public function Export(): TransactionExport
    {
        return new TransactionExport();
    }

    public function PartialDebit(): TransactionPartialDebit
    {
        return new TransactionPartialDebit();
    }

    public function ViewTransactionTimeline(string $id_or_reference)
    {
        return (new TransactionViewTimeline())->Execute($id_or_reference);
    }
}