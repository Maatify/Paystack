<?php
/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-22 5:38 PM
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