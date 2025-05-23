# Tzkt\RewardsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rewardsGetBakerRewards()**](RewardsApi.md#rewardsGetBakerRewards) | **GET** /v1/rewards/bakers/{address} | Get baker cycle rewards |
| [**rewardsGetBakerRewardsCount()**](RewardsApi.md#rewardsGetBakerRewardsCount) | **GET** /v1/rewards/bakers/{address}/count | Get baker cycle rewards count |
| [**rewardsGetDelegatorRewards()**](RewardsApi.md#rewardsGetDelegatorRewards) | **GET** /v1/rewards/delegators/{address} | Get delegator cycle rewards |
| [**rewardsGetDelegatorRewardsCount()**](RewardsApi.md#rewardsGetDelegatorRewardsCount) | **GET** /v1/rewards/delegators/{address}/count | Get delegator cycle rewards count |
| [**rewardsGetRewardSplit()**](RewardsApi.md#rewardsGetRewardSplit) | **GET** /v1/rewards/split/{baker}/{cycle} | Get reward split |
| [**rewardsGetRewardSplitDelegator()**](RewardsApi.md#rewardsGetRewardSplitDelegator) | **GET** /v1/rewards/split/{baker}/{cycle}/{delegator} | Get reward split delegator |


## `rewardsGetBakerRewards()`

```php
rewardsGetBakerRewards($address, $cycle, $select, $sort, $offset, $limit, $quote): \Tzkt\Model\BakerRewards[]
```

Get baker cycle rewards

Returns a list of baker rewards for every cycle, including future cycles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Baker address.
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters rewards by cycle.
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts cycle rewards by specified field. Supported fields: `cycle` (default, desc).
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // \Tzkt\Model\AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->rewardsGetBakerRewards($address, $cycle, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetBakerRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Baker address. | |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters rewards by cycle. | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**\Tzkt\Model\AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Tzkt\Model\BakerRewards[]**](../Model/BakerRewards.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rewardsGetBakerRewardsCount()`

```php
rewardsGetBakerRewardsCount($address): int
```

Get baker cycle rewards count

Returns total number of cycles where the baker was active

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Baker address

try {
    $result = $apiInstance->rewardsGetBakerRewardsCount($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetBakerRewardsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Baker address | |

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

## `rewardsGetDelegatorRewards()`

```php
rewardsGetDelegatorRewards($address, $cycle, $select, $sort, $offset, $limit, $quote): \Tzkt\Model\DelegatorRewards[]
```

Get delegator cycle rewards

Returns a list of delegator rewards for every cycle, including future cycles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Delegator address.
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters rewards by cycle.
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts cycle rewards by specified field. Supported fields: `cycle` (default, desc).
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // \Tzkt\Model\AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->rewardsGetDelegatorRewards($address, $cycle, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetDelegatorRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Delegator address. | |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters rewards by cycle. | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**\Tzkt\Model\AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Tzkt\Model\DelegatorRewards[]**](../Model/DelegatorRewards.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rewardsGetDelegatorRewardsCount()`

```php
rewardsGetDelegatorRewardsCount($address): int
```

Get delegator cycle rewards count

Returns total number of cycles where the delegator was delegated to an active baker

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Delegator address

try {
    $result = $apiInstance->rewardsGetDelegatorRewardsCount($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetDelegatorRewardsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Delegator address | |

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

## `rewardsGetRewardSplit()`

```php
rewardsGetRewardSplit($baker, $cycle, $offset, $limit): \Tzkt\Model\RewardSplit
```

Get reward split

Returns baker rewards for the specified cycle with all delegator balances at that cycle to allow rewards distribution in proportion to shares.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = 'baker_example'; // string | Baker address
$cycle = 56; // int | Rewards cycle
$offset = 0; // int | Specifies how many delegators in the reward split should be skipped
$limit = 100; // int | Maximum number of delegators to return

try {
    $result = $apiInstance->rewardsGetRewardSplit($baker, $cycle, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetRewardSplit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baker** | **string**| Baker address | |
| **cycle** | **int**| Rewards cycle | |
| **offset** | **int**| Specifies how many delegators in the reward split should be skipped | [optional] [default to 0] |
| **limit** | **int**| Maximum number of delegators to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\RewardSplit**](../Model/RewardSplit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rewardsGetRewardSplitDelegator()`

```php
rewardsGetRewardSplitDelegator($baker, $cycle, $delegator): \Tzkt\Model\SplitDelegator
```

Get reward split delegator

Returns delegator/staker from the reward split for the specified cycle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = 'baker_example'; // string | Baker address
$cycle = 56; // int | Reward split cycle
$delegator = 'delegator_example'; // string | Delegator address

try {
    $result = $apiInstance->rewardsGetRewardSplitDelegator($baker, $cycle, $delegator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetRewardSplitDelegator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baker** | **string**| Baker address | |
| **cycle** | **int**| Reward split cycle | |
| **delegator** | **string**| Delegator address | |

### Return type

[**\Tzkt\Model\SplitDelegator**](../Model/SplitDelegator.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
