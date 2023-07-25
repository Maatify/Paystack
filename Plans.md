
## Plans

[API Docs](https://paystack.com/docs/api/plan/)

### Plan Object
```PHP
$plan = $pay_stack->Plan();
```
## Calling Plans API Methods

### Create Plan [docs](https://paystack.com/docs/api/plan/#create)
```PHP
$result = $plan
->CreatePlan()

// set your parameters one by one 
->SetOptional('currency', 'USD')
->SetOptional('send_invoices', true)
// or as array
->SetAllOptionalAsArray(['currency'=> 'USD', 'send_invoices'=> true])

// target interval by one of below
->Daily()
->Weekly()
->Monthly()
->Quarterly()
->Biannually()
->Annually()

->Execute($plan_name, $amount_in_cents);
print_r($result);
```

###
### List Plans [docs](https://paystack.com/docs/api/subscription/#list)
```PHP
$result = $plan
->ListPlans()
// parameters can set here
->SetOptional('interval', 'daily')

->Execute();
print_r($result);
```

###
### Fetch Plan [docs](https://paystack.com/docs/api/plan/#fetch)
```PHP
$result = $plan->FetchPlan($planId_or_planCode);
print_r($result);
```

###
### Update Plan [docs](https://paystack.com/docs/api/plan/#update)
```PHP
$result = $plan->UpdatePlan()
// parameters can set here
->SetAllOptionalAsArray([
    'name' => 'Plan Weekly',
    'amount' => 600, // mean amount is 6
    'interval' => 'weekly',
])

->Execute($planId_or_planCode);
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
