**I'm a github noob and I am in the process of learning github and programming; this is one of my trial repos**  
### It is recommended that you read the official documentation first

V3 ( V1.1 eol ), All interface methods are initialized with the same methods provided by Bitfinex. For more details please see links below.

[Bittrex API Documentation](https://bittrex.github.io/api/v3)

### Other Exchanges

[Checkout PHP Exchanges by zhouaini528](https://github.com/zhouaini528/exchanges-php)
[src/api](https://github.com/zhouaini528/zb-php/tree/master/src/Api)

#### Installation method
```
composer require detrading/bittrex
```

### Spot Trading - API
Market related API [More](https://github.com/detrading/bittrex-php/blob/master/tests/market.php)
```php
//If you have an Subaccount Id, you can fill it in
$bittrex=new Bittrex($key,$secret,$subaccount_id='');

try {
    $result=$bittrex->market()->headTrade([
        'marketSymbol'=>'BTC-USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bittrex->market()->getTrades([
        'marketSymbol'=>'BTC-USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bittrex->market()->getCandles([
        'marketSymbol'=>'BTC-USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bittrex->market()->getTicker([
        'marketSymbol'=>'BTC-USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bittrex->market()->getTickers();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bittrex->market()->headSummaries();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bittrex->market()->getSummaries();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bittrex->market()->getList();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

```
### Order - API
Order related API [More](https://github.com/detrading/bitfinex-php/blob/master/tests/order.php)
```php
//If you have an Subaccount Id, you can fill it in
$bittrex=new Bittrex($key,$secret,$subaccount_id='');

//Place an Order
try {
    $result=$bittrex->order()->post([
        //'clientOrderId'=>'xxxxxxxx',
        'marketSymbol'=>'BTC-USD',
        'direction'=>'BUY',//BUY, SELL
        
        'type'=>'LIMIT',//LIMIT, MARKET, CEILING_LIMIT, CEILING_MARKET
        'quantity'=>'0.01',
        'limit'=>'3000',

        //GOOD_TIL_CANCELLED, IMMEDIATE_OR_CANCEL, FILL_OR_KILL, POST_ONLY_GOOD_TIL_CANCELLED, BUY_NOW
        'timeInForce'=>'FILL_OR_KILL' 
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//Track the order
try {
    $result=$bittrex->order()->get([
        'orderId'=>'xxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//Cancel an existing order
try {
    $result=$bittrex->order()->delete([
        'orderId'=>'xxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```
### Account - API
Account related API [More](https://github.com/detrading/bitfinex-php/blob/master/tests/account.php)
```php
//If you have an Subaccount Id, you can fill it in
$bittrex=new Bittrex($key,$secret,$subaccount_id='');

try {
    $result=$bittrex->account()->getl();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bittrex->account()->getVolume();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

```

[More Tests](https://github.com/detrading/bittrex-php/tree/master/tests)
[More API](https://github.com/detrading/bittrex-php/tree/master/src/Api)
