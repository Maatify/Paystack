<?php
/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 7:16 PM
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

namespace Maatify\PayStack\Subscriptions;

class Subscriptions
{
    public function CreateSubscription(): SubscriptionCreate
    {
        return new SubscriptionCreate();
    }

    public function ListSubscriptions(): SubscriptionsList
    {
        return new SubscriptionsList();
    }

    public function FetchSubscription(int|string $id_or_code)
    {
        return (new SubscriptionFetch())->Execute($id_or_code);
    }

    public function EnableSubscription(string $subscription_code, string $email_token)
    {
        return (new SubscriptionEnable())->Execute($subscription_code, $email_token);
    }

    public function DisableSubscription(string $subscription_code, string $email_token)
    {
        return (new SubscriptionDisable())->Execute($subscription_code, $email_token);
    }

    public function GenerateUpdateSubscriptionLink(string $subscription_code)
    {
        return (new SubscriptionGenerateUpdateLink())->Execute($subscription_code);
    }

    public function SendUpdateSubscriptionLink(string $subscription_code)
    {
        return (new SubscriptionSendUpdateLink())->Execute($subscription_code);
    }
}