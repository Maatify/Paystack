# Installation

```shell
composer require maatify/paystack
```

# Usage

### Instance
```php
use Maatify\PayStack\PayStackController;

require_once __DIR__ . '/vendor/autoload.php';

$pay_stack = new PayStackController(__SECRET_KEY__); // PayStack instance
```
#
### Setting optional:  Query Or Body Parameters
#### there is two options to set parameters for All Methods : 
###### This explains for transaction Initialize Example
- 1st 
```php
$caller_object = $pay_stack->Transaction()->Initialize(); // transaction Initialize Example
$result = $caller_object
->SetOptional(__key__, __val__)
->SetOptional(__key__, __val__)
->Execute(__CUSTOMER_EMAIL__, __AMOUNT_IN_CENT__);
```
- 2nd 
```php
$caller_object = $pay_stack->Transaction()->Initialize(); // transaction Initialize Example
$result = $caller_object->SetAllOptionalAsArray([
__key1__ => __val1__, 
__key2__ => __val2__, 
])
->Execute(__CUSTOMER_EMAIL__, __AMOUNT_IN_CENT__);
```
#
## Transactions Example
- The Transactions API allows you create and manage payments on your integration.
- ✨ examples: [Transactions.md](Transactions.md) ✨
#
## Customers Example
- TThe Customers API allows you create and manage customers on your integration.
- ✨ examples: [Customers.md](Customers.md) ✨
#
## Plans Example
- The Plans API allows you create and manage installment payment options on your integration.
- ✨ examples: [Subscriptions.md](Subscriptions.md) ✨
#
## Subscriptions Example
- The Subscriptions API allows you create and manage recurring payment on your integration.
- ✨ examples: [Subscriptions.md](Subscriptions.md) ✨