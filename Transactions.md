
## Transactions

[API Docs](https://paystack.com/docs/api/transaction/)

### Transaction Object
```PHP
$transaction = $pay_stack->Transaction();
```
## Calling Transaction API Methods

### Initialize Transaction [docs](https://paystack.com/docs/api/transaction/#initialize)
```PHP
// __REFERENCE__ is optional

$result = $transaction->Initialize()

// setting parameters one by one
->SetOptional('channels', ['eft'])  //  (Optional)  if needed
->SetOptional('currency', 'USD')    //  (Optional)  if needed

// setting parameters as array
->SetAllOptionalAsArray(['channels'=> ['eft'], 'currency'=> 'USD']) //  (Optional)  if needed

->Execute(__CUSTOMER_EMAIL__, __AMOUNT_IN_CENT__, __REFERENCE__);

print_r($result);
```
###
### Verify Transaction [docs](https://paystack.com/docs/api/transaction/#verify)
```PHP
//by reference
$result = $transaction->Verify(__REFERENCE__);
print_r($result);
```
###
### List Transaction [docs](https://paystack.com/docs/api/transaction/#list)
```PHP
$result = $transaction->List();
print_r($result);
```
###
### Fetch Transaction [docs](https://paystack.com/docs/api/transaction/#fetch)
```PHP
$result = $transaction->Fetch(__TRANSACTION_ID__)
print_r($result);
```
###
### Charge Authorization [docs](https://paystack.com/docs/api/transaction/#charge-authorization)
```PHP
$result = $transaction
->ChargeAuthorization()
// optionals can set here
->Execute(__customer_email__, __AMOUNT_IN_CENT__, __authorization_code__)
print_r($result);
```
###
### View Transaction Timeline [docs](https://paystack.com/docs/api/transaction/#view-timeline)
```PHP
$result = $transaction->ViewTransactionTimeline(__id_or_reference__);
print_r($result);
```
###
### Transaction Totals [docs](https://paystack.com/docs/api/transaction/#totals)
```PHP
$result = $transaction
->Total()
// optionals can set here
->Execute();
print_r($result);
```
### 
### Export Transaction [docs](https://paystack.com/docs/api/transaction/#export)
```PHP
$result = $transaction
->Total()
// optionals can set here
->Execute();
print_r($result);
```
### 
### Partial Debit [docs](https://paystack.com/docs/api/transaction/#partial-debit)
```PHP
$result = $transaction->PartialDebit()->Execute('mohamed@maatify.dev', 100, 'ZAR', 'AUTH_wqpld0d2td');

$result = $transaction
->PartialDebit()
// optionals can set here
->Execute(__customerEmail__, __amountInCents__, __currency__, __authorization_code__);
print_r($result);
```