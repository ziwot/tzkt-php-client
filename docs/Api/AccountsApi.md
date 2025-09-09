# Tzkt\AccountsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountsGet()**](AccountsApi.md#accountsGet) | **GET** /v1/accounts | Get accounts |
| [**accountsGetActivity()**](AccountsApi.md#accountsGetActivity) | **GET** /v1/accounts/activity | Get accounts activity |
| [**accountsGetBalance()**](AccountsApi.md#accountsGetBalance) | **GET** /v1/accounts/{address}/balance | Get balance |
| [**accountsGetBalanceAtDate()**](AccountsApi.md#accountsGetBalanceAtDate) | **GET** /v1/accounts/{address}/balance_history/{datetime} | Get balance at date |
| [**accountsGetBalanceAtLevel()**](AccountsApi.md#accountsGetBalanceAtLevel) | **GET** /v1/accounts/{address}/balance_history/{level} | Get balance at level |
| [**accountsGetBalanceHistory()**](AccountsApi.md#accountsGetBalanceHistory) | **GET** /v1/accounts/{address}/balance_history | Get balance history |
| [**accountsGetBalanceReport()**](AccountsApi.md#accountsGetBalanceReport) | **GET** /v1/accounts/{address}/report | Get account report |
| [**accountsGetByAddress()**](AccountsApi.md#accountsGetByAddress) | **GET** /v1/accounts/{address} | Get account by address |
| [**accountsGetContracts()**](AccountsApi.md#accountsGetContracts) | **GET** /v1/accounts/{address}/contracts | Get account contracts |
| [**accountsGetCount()**](AccountsApi.md#accountsGetCount) | **GET** /v1/accounts/count | Get accounts count |
| [**accountsGetCounter()**](AccountsApi.md#accountsGetCounter) | **GET** /v1/accounts/{address}/counter | Get counter |
| [**accountsGetDelegators()**](AccountsApi.md#accountsGetDelegators) | **GET** /v1/accounts/{address}/delegators | Get account delegators |


## `accountsGet()`

```php
accountsGet($id, $address, $type, $kind, $delegate, $staked_pseudotokens, $balance, $staked, $last_activity, $select, $sort, $offset, $limit): \Tzkt\Model\Account[]
```

Get accounts

Returns a list of accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters by internal id.
$address = new \Tzkt\Model\\Tzkt\Model\AccountsGetAddressParameter(); // \Tzkt\Model\AccountsGetAddressParameter | Filters by address.
$type = new \Tzkt\Model\\Tzkt\Model\AccountsGetTypeParameter(); // \Tzkt\Model\AccountsGetTypeParameter | Filters accounts by type (`user`, `delegate`, `contract`, `rollup`, `smart_rollup`, `ghost`).
$kind = new \Tzkt\Model\\Tzkt\Model\AccountsGetKindParameter(); // \Tzkt\Model\AccountsGetKindParameter | Filters accounts by contract kind (`delegator_contract` or `smart_contract`)
$delegate = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filters accounts by delegate. Allowed fields for `.eqx` mode: none.
$staked_pseudotokens = new \Tzkt\Model\\Tzkt\Model\AccountsGetStakedPseudotokensParameter(); // \Tzkt\Model\AccountsGetStakedPseudotokensParameter | Filters accounts by amount of staked pseudotokens.
$balance = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filters accounts by balance
$staked = new \Tzkt\Model\\Tzkt\Model\AccountsGetStakedParameter(); // \Tzkt\Model\AccountsGetStakedParameter | Filters accounts by participation in staking
$last_activity = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters accounts by last activity level (where the account was updated)
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `balance`, `rollupBonds`, `firstActivity`, `lastActivity`, `numTransactions`, `numContracts`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->accountsGet($id, $address, $type, $kind, $delegate, $staked_pseudotokens, $balance, $staked, $last_activity, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters by internal id. | [optional] |
| **address** | [**\Tzkt\Model\AccountsGetAddressParameter**](../Model/.md)| Filters by address. | [optional] |
| **type** | [**\Tzkt\Model\AccountsGetTypeParameter**](../Model/.md)| Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). | [optional] |
| **kind** | [**\Tzkt\Model\AccountsGetKindParameter**](../Model/.md)| Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) | [optional] |
| **delegate** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filters accounts by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **staked_pseudotokens** | [**\Tzkt\Model\AccountsGetStakedPseudotokensParameter**](../Model/.md)| Filters accounts by amount of staked pseudotokens. | [optional] |
| **balance** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filters accounts by balance | [optional] |
| **staked** | [**\Tzkt\Model\AccountsGetStakedParameter**](../Model/.md)| Filters accounts by participation in staking | [optional] |
| **last_activity** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters accounts by last activity level (where the account was updated) | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;rollupBonds&#x60;, &#x60;firstActivity&#x60;, &#x60;lastActivity&#x60;, &#x60;numTransactions&#x60;, &#x60;numContracts&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\Account[]**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetActivity()`

```php
accountsGetActivity($addresses, $roles, $types, $timestamp, $sort, $last_id, $limit, $micheline, $quote): \Tzkt\Model\Activity[]
```

Get accounts activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addresses = 'addresses_example'; // string | Comma-separated list of account addresses to get activity of.
$roles = 'roles_example'; // string | Comma-separated list of activity roles (`sender`, `target`, `initiator`, `mention`) to filter activity by.
$types = 'types_example'; // string | Comma-separated list of activity types (`activation`, `autostaking`, `baking`, `ballot`, `dal_attestation_reward`,             `dal_entrapment_evidence`, `dal_publish_commitment`, `delegation`, `double_baking`, `double_consensus`, `drain_delegate`,              `attestation`, `attestation_reward`, `increase_paid_storage`, `migration`, `nonce_revelation`, `origination`, `preattestation`, `proposal`,             `register_constant`, `reveal`, `revelation_penalty`, `set_delegate_parameters`, `set_deposits_limit`, `sr_add_messages`, `sr_cement`, `sr_execute`,             `sr_originate`, `sr_publish`, `sr_recover_bond`, `sr_refute`, `staking`, `transaction`, `transfer_ticket`, `tx_rollup_commit`, `tx_rollup_dispatch_tickets`,             `tx_rollup_finalize_commitment`, `tx_rollup_origination`, `tx_rollup_rejection`, `tx_rollup_remove_commitment`, `tx_rollup_return_bond`, `tx_rollup_submit_batch`,             `vdf_revelation`, `update_secondary_key`, `ticket_transfer`, `token_transfer`)
$timestamp = new \Tzkt\Model\\Tzkt\Model\AccountsGetActivityTimestampParameter(); // \Tzkt\Model\AccountsGetActivityTimestampParameter | Filter activity by timestamp.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetActivitySortParameter(); // \Tzkt\Model\AccountsGetActivitySortParameter | Sort mode: 0 - asc (oldest to newest), 1 - desc (newest to oldest).
$last_id = 56; // int | Id of the last activity element received, which is used for cursor pagination.
$limit = 100; // int | Number of elements to return.
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetActivityMichelineParameter(); // \Tzkt\Model\AccountsGetActivityMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string.
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetActivityQuoteParameter(); // \Tzkt\Model\AccountsGetActivityQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response.

try {
    $result = $apiInstance->accountsGetActivity($addresses, $roles, $types, $timestamp, $sort, $last_id, $limit, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addresses** | **string**| Comma-separated list of account addresses to get activity of. | [optional] |
| **roles** | **string**| Comma-separated list of activity roles (&#x60;sender&#x60;, &#x60;target&#x60;, &#x60;initiator&#x60;, &#x60;mention&#x60;) to filter activity by. | [optional] |
| **types** | **string**| Comma-separated list of activity types (&#x60;activation&#x60;, &#x60;autostaking&#x60;, &#x60;baking&#x60;, &#x60;ballot&#x60;, &#x60;dal_attestation_reward&#x60;,             &#x60;dal_entrapment_evidence&#x60;, &#x60;dal_publish_commitment&#x60;, &#x60;delegation&#x60;, &#x60;double_baking&#x60;, &#x60;double_consensus&#x60;, &#x60;drain_delegate&#x60;,              &#x60;attestation&#x60;, &#x60;attestation_reward&#x60;, &#x60;increase_paid_storage&#x60;, &#x60;migration&#x60;, &#x60;nonce_revelation&#x60;, &#x60;origination&#x60;, &#x60;preattestation&#x60;, &#x60;proposal&#x60;,             &#x60;register_constant&#x60;, &#x60;reveal&#x60;, &#x60;revelation_penalty&#x60;, &#x60;set_delegate_parameters&#x60;, &#x60;set_deposits_limit&#x60;, &#x60;sr_add_messages&#x60;, &#x60;sr_cement&#x60;, &#x60;sr_execute&#x60;,             &#x60;sr_originate&#x60;, &#x60;sr_publish&#x60;, &#x60;sr_recover_bond&#x60;, &#x60;sr_refute&#x60;, &#x60;staking&#x60;, &#x60;transaction&#x60;, &#x60;transfer_ticket&#x60;, &#x60;tx_rollup_commit&#x60;, &#x60;tx_rollup_dispatch_tickets&#x60;,             &#x60;tx_rollup_finalize_commitment&#x60;, &#x60;tx_rollup_origination&#x60;, &#x60;tx_rollup_rejection&#x60;, &#x60;tx_rollup_remove_commitment&#x60;, &#x60;tx_rollup_return_bond&#x60;, &#x60;tx_rollup_submit_batch&#x60;,             &#x60;vdf_revelation&#x60;, &#x60;update_secondary_key&#x60;, &#x60;ticket_transfer&#x60;, &#x60;token_transfer&#x60;) | [optional] |
| **timestamp** | [**\Tzkt\Model\AccountsGetActivityTimestampParameter**](../Model/.md)| Filter activity by timestamp. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetActivitySortParameter**](../Model/.md)| Sort mode: 0 - asc (oldest to newest), 1 - desc (newest to oldest). | [optional] |
| **last_id** | **int**| Id of the last activity element received, which is used for cursor pagination. | [optional] |
| **limit** | **int**| Number of elements to return. | [optional] [default to 100] |
| **micheline** | [**\Tzkt\Model\AccountsGetActivityMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string. | [optional] |
| **quote** | [**\Tzkt\Model\AccountsGetActivityQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response. | [optional] |

### Return type

[**\Tzkt\Model\Activity[]**](../Model/Activity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetBalance()`

```php
accountsGetBalance($address): int
```

Get balance

Returns account balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)

try {
    $result = $apiInstance->accountsGetBalance($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address (starting with tz or KT) | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetBalanceAtDate()`

```php
accountsGetBalanceAtDate($address, $datetime): int
```

Get balance at date

Returns account balance* at the specified datetime.   \\* - for non-baker tz-accounts historical balances do not include staked tez, because stakers do not really have staked tez on their balance, they have staking pseudotokens instead. If you want to get a full historical balance, including staked tez, use the Tezos node RPC: `/chains/main/blocks/{level}/context/contracts/{address}/full_balance`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$datetime = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Datetime at which you want to know account balance (e.g. `2020-01-01`, or `2019-12-30T23:42:59Z`)

try {
    $result = $apiInstance->accountsGetBalanceAtDate($address, $datetime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalanceAtDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address (starting with tz or KT) | |
| **datetime** | **\DateTime**| Datetime at which you want to know account balance (e.g. &#x60;2020-01-01&#x60;, or &#x60;2019-12-30T23:42:59Z&#x60;) | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetBalanceAtLevel()`

```php
accountsGetBalanceAtLevel($address, $level): int
```

Get balance at level

Returns account balance* at the specified block.   \\* - for non-baker tz-accounts historical balances do not include staked tez, because stakers do not really have staked tez on their balance, they have staking pseudotokens instead. If you want to get a full historical balance, including staked tez, use the Tezos node RPC: `/chains/main/blocks/{level}/context/contracts/{address}/full_balance`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$level = 56; // int | Block height at which you want to know account balance

try {
    $result = $apiInstance->accountsGetBalanceAtLevel($address, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalanceAtLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address (starting with tz or KT) | |
| **level** | **int**| Block height at which you want to know account balance | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetBalanceHistory()`

```php
accountsGetBalanceHistory($address, $step, $select, $sort, $offset, $limit, $quote): \Tzkt\Model\HistoricalBalance[]
```

Get balance history

Returns time series with historical balances* (only changes, without duplicates).   \\* - for non-baker tz-accounts historical balances do not include staked tez, because stakers do not really have staked tez on their balance, they have staking pseudotokens instead. If you want to get a full historical balance, including staked tez, use the Tezos node RPC: `/chains/main/blocks/{level}/context/contracts/{address}/full_balance`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$step = 56; // int | Step of the time series, for example if `step = 1000` you will get balances at blocks `1000, 2000, 3000, ...`.
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts historical balances by specified field. Supported fields: `level`.
$offset = 0; // int | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetActivityQuoteParameter(); // \Tzkt\Model\AccountsGetActivityQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->accountsGetBalanceHistory($address, $step, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalanceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address (starting with tz or KT) | |
| **step** | **int**| Step of the time series, for example if &#x60;step &#x3D; 1000&#x60; you will get balances at blocks &#x60;1000, 2000, 3000, ...&#x60;. | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts historical balances by specified field. Supported fields: &#x60;level&#x60;. | [optional] |
| **offset** | **int**| Specifies which or how many items should be skipped | [optional] [default to 0] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**\Tzkt\Model\AccountsGetActivityQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Tzkt\Model\HistoricalBalance[]**](../Model/HistoricalBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetBalanceReport()`

```php
accountsGetBalanceReport($address, $from, $to, $currency, $historical, $delimiter, $separator): \SplFileObject
```

Get account report

Exports account balance report in .csv format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31)
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31)
$currency = 'currency_example'; // string | Currency to convert amounts to (`btc`, `eur`, `usd`, `cny`, `jpy`, `krw`, `eth`, `gbp`)
$historical = false; // bool | `true` if you want to use historical prices, `false` to use current price
$delimiter = 'comma'; // string | Column delimiter (`comma`, `semicolon`)
$separator = 'point'; // string | Decimal separator (`comma`, `point`)

try {
    $result = $apiInstance->accountsGetBalanceReport($address, $from, $to, $currency, $historical, $delimiter, $separator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalanceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address (starting with tz or KT) | |
| **from** | **\DateTime**| Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31) | [optional] |
| **to** | **\DateTime**| End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31) | [optional] |
| **currency** | **string**| Currency to convert amounts to (&#x60;btc&#x60;, &#x60;eur&#x60;, &#x60;usd&#x60;, &#x60;cny&#x60;, &#x60;jpy&#x60;, &#x60;krw&#x60;, &#x60;eth&#x60;, &#x60;gbp&#x60;) | [optional] |
| **historical** | **bool**| &#x60;true&#x60; if you want to use historical prices, &#x60;false&#x60; to use current price | [optional] [default to false] |
| **delimiter** | **string**| Column delimiter (&#x60;comma&#x60;, &#x60;semicolon&#x60;) | [optional] [default to &#39;comma&#39;] |
| **separator** | **string**| Decimal separator (&#x60;comma&#x60;, &#x60;point&#x60;) | [optional] [default to &#39;point&#39;] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetByAddress()`

```php
accountsGetByAddress($address): \Tzkt\Model\Account
```

Get account by address

Returns an account with the specified address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address

try {
    $result = $apiInstance->accountsGetByAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address | |

### Return type

[**\Tzkt\Model\Account**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetContracts()`

```php
accountsGetContracts($address, $sort, $offset, $limit): \Tzkt\Model\RelatedContract[]
```

Get account contracts

Returns a list of contracts created by (or related to) the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts contracts by specified field. Supported fields: `id` (default, desc), `balance`, `creationLevel`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->accountsGetContracts($address, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address (starting with tz or KT) | |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts contracts by specified field. Supported fields: &#x60;id&#x60; (default, desc), &#x60;balance&#x60;, &#x60;creationLevel&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\RelatedContract[]**](../Model/RelatedContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetCount()`

```php
accountsGetCount($type, $kind, $balance, $staked, $first_activity): int
```

Get accounts count

Returns a number of accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \Tzkt\Model\\Tzkt\Model\AccountsGetTypeParameter(); // \Tzkt\Model\AccountsGetTypeParameter | Filters accounts by type (`user`, `delegate`, `contract`, `rollup`, `smart_rollup`, `ghost`).
$kind = new \Tzkt\Model\\Tzkt\Model\AccountsGetKindParameter(); // \Tzkt\Model\AccountsGetKindParameter | Filters accounts by contract kind (`delegator_contract` or `smart_contract`)
$balance = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filters accounts by balance
$staked = new \Tzkt\Model\\Tzkt\Model\AccountsGetStakedParameter(); // \Tzkt\Model\AccountsGetStakedParameter | Filters accounts by participation in staking
$first_activity = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters accounts by first activity level (where the account was created)

try {
    $result = $apiInstance->accountsGetCount($type, $kind, $balance, $staked, $first_activity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\Tzkt\Model\AccountsGetTypeParameter**](../Model/.md)| Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). | [optional] |
| **kind** | [**\Tzkt\Model\AccountsGetKindParameter**](../Model/.md)| Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) | [optional] |
| **balance** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filters accounts by balance | [optional] |
| **staked** | [**\Tzkt\Model\AccountsGetStakedParameter**](../Model/.md)| Filters accounts by participation in staking | [optional] |
| **first_activity** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters accounts by first activity level (where the account was created) | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetCounter()`

```php
accountsGetCounter($address): int
```

Get counter

Returns account counter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)

try {
    $result = $apiInstance->accountsGetCounter($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address (starting with tz or KT) | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetDelegators()`

```php
accountsGetDelegators($address, $type, $balance, $delegation_level, $sort, $offset, $limit): \Tzkt\Model\Delegator[]
```

Get account delegators

Returns a list of accounts delegated to the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz)
$type = new \Tzkt\Model\\Tzkt\Model\AccountsGetTypeParameter(); // \Tzkt\Model\AccountsGetTypeParameter | Filters delegators by type (`user`, `delegate`, `contract`, `rollup`, `smart_rollup`, `ghost`).
$balance = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filters delegators by balance.
$delegation_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Number of items to skip
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts delegators by specified field. Supported fields: `delegationLevel` (default, desc), `balance`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->accountsGetDelegators($address, $type, $balance, $delegation_level, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetDelegators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Account address (starting with tz) | |
| **type** | [**\Tzkt\Model\AccountsGetTypeParameter**](../Model/.md)| Filters delegators by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). | [optional] |
| **balance** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filters delegators by balance. | [optional] |
| **delegation_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Number of items to skip | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;delegationLevel&#x60; (default, desc), &#x60;balance&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\Delegator[]**](../Model/Delegator.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
