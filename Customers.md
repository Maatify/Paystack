
## Customers

[API Docs](https://paystack.com/docs/api/customer/)

### Customers Object
```PHP
$customer = $pay_stack->Customers();
```
## Calling Customers API Methods

### Create Customer [docs](https://paystack.com/docs/api/customer/#create)
```PHP
$result = $customer
    ->CreateCustomer()
// set parameters here
    ->SetAllOptionalAsArray([
                            'first_name'=> 'Mohamed', 
                            'last_name'=> 'Abdulalim',
                            'metadata' => ['customer_id'=>5001, 'location'=>'London']
                            ])

    ->Execute('mohamed@maatify.dev');
print_r($result);
```

###
### List Customer [docs](https://paystack.com/docs/api/customer/#list)
```PHP
$result = $customer
    ->ListCustomer()

// parameters can set here
    ->SetOptional('page', 1)

    ->Execute();
print_r($result);
```

###
### Fetch Customer [docs](https://paystack.com/docs/api/customer/#fetch)
```PHP
$result = $customer->FetchCustomer($email_or_code);
print_r($result);
```

###
### Update Customer [docs](https://paystack.com/docs/api/customer/#update)
```PHP
$result = $customer->UpdateCustomer()
    ->SetAllOptionalAsArray([
        'metadata' => [
            'first_name'  => 'Mohamed',
            'last_name'   => 'Abdulalim',
            'customer_id' => 5000,
            'location'    => 'London',
            'photos'      => [
                ['id' => 1, 'img' => 'test1.jpg'],
            ],
        ],
    ])
    ->Execute($customer_code);
print_r($result);
```

###
### Validate Customer [docs](https://paystack.com/docs/api/subscription/#disable)
```PHP
$result = $customer->ValidateCustomer($customerCode_or_customerEmail, $country_code, $type, $account_number, $bank_code, $bvn)
// parameters can set here
    ->Execute()
print_r($result);
```

###
### Whitelist/Blacklist Customer [docs](https://paystack.com/docs/api/customer/#whitelist-blacklist)
```PHP
$obj = $customer->WhitelistBlacklistCustomer($subscription_code);
// actions
$result = $obj->Allow();
$result = $obj->Deny();
$result = $obj->Default();
print_r($result);
```

###
### Deactivate Authorization Link [docs](https://paystack.com/docs/api/customer/#deactivate-authorization)
```PHP
$result = $customer->DeactivateAuthorization()
    ->Execute($authorization_code);
print_r($result);
```
