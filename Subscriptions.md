
## Subscriptions

[API Docs](https://paystack.com/docs/api/subscription/)

### Subscriptions Object
```PHP
$subscriptions = $pay_stack->Subscriptions();
```
## Calling Subscriptions API Methods

### Create Subscription [docs](https://paystack.com/docs/api/subscription/#create)
```PHP
$result = $subscription
->CreateSubscription()
->Execute($customer_email_or_code, $plan_code, $authorization = '', $start_date = '');
print_r($result);
```

###
### List Subscriptions [docs](https://paystack.com/docs/api/subscription/#list)
```PHP
$result = $subscription->ListSubscriptions()
// optionals can set here
    ->Execute();
print_r($result);
```

###
### Fetch Subscription [docs](https://paystack.com/docs/api/subscription/#fetch)
```PHP
$result = $subscription->FetchSubscription($subscriptionId_or_subscriptionCode);
print_r($result);
```

###
### Enable Subscription [docs](https://paystack.com/docs/api/subscription/#enable)
```PHP
$result = $subscription->EnableSubscription($subscription_code, $email_token);
print_r($result);
```

###
### Disable Subscription [docs](https://paystack.com/docs/api/subscription/#disable)
```PHP
$result = $subscription->DisableSubscription($subscription_code, $email_token);
print_r($result);
```

###
### Generate Update Subscription Link [docs](https://paystack.com/docs/api/subscription/#manage-link)
```PHP
$result = $subscription->GenerateUpdateSubscriptionLink($subscription_code);
print_r($result);
```

###
### Send Update Subscription Link [docs](https://paystack.com/docs/api/subscription/#manage-email)
```PHP
$result = $subscription->SendUpdateSubscriptionLink($subscription_code);
print_r($result);
```
