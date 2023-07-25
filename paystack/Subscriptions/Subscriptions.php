<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 7:16 PM
 * https://www.Maatify.dev
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