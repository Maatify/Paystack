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

namespace Maatify\PayStack;

use Maatify\PayStack\Customers\Customers;
use Maatify\PayStack\Plans\Plan;
use Maatify\PayStack\Subscriptions\Subscriptions;
use Maatify\PayStack\Transactions\Transaction;

class PayStackController extends ParamsSetter
{
    private Transaction $transaction;
    private Plan $plan;
    private Subscriptions $subscriptions;
    private Customers $customers;

    public function __construct(string $secret_key)
    {
        parent::__construct();
        $this->SetSecretKey($secret_key);
    }

    public function Transaction(): Transaction
    {
        if(empty($this->transaction)) {
            $this->transaction = new Transaction();
        }
        return $this->transaction;
    }

    public function Plan(): Plan
    {
        if(empty($this->plan)) {
            $this->plan = new Plan();
        }
        return $this->plan;
    }

    public function Subscriptions(): Subscriptions
    {
        if(empty($this->subscriptions)) {
            $this->subscriptions = new Subscriptions();
        }
        return $this->subscriptions;
    }

    public function Customers(): Customers
    {
        if(empty($this->customers)){
            $this->customers = new Customers();
        }
        return $this->customers;
    }
}