# Tzkt\RewardsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rewardsGetBakerRewards()**](RewardsApi.md#rewardsGetBakerRewards) | **GET** /v1/rewards/bakers/{address} | Get baker cycle rewards |
| [**rewardsGetBakerRewardsCount()**](RewardsApi.md#rewardsGetBakerRewardsCount) | **GET** /v1/rewards/bakers/{address}/count | Get baker cycle rewards count |
| [**rewardsGetDelegatorRewards()**](RewardsApi.md#rewardsGetDelegatorRewards) | **GET** /v1/rewards/delegators/{address} | Get delegator cycle rewards |
| [**rewardsGetDelegatorRewardsCount()**](RewardsApi.md#rewardsGetDelegatorRewardsCount) | **GET** /v1/rewards/delegators/{address}/count | Get delegator cycle rewards count |
| [**rewardsGetRewardSplit()**](RewardsApi.md#rewardsGetRewardSplit) | **GET** /v1/rewards/split/{baker}/{cycle} | Get reward split |
| [**rewardsGetRewardSplitMember()**](RewardsApi.md#rewardsGetRewardSplitMember) | **GET** /v1/rewards/split/{baker}/{cycle}/{member} | Get reward split member |
| [**rewardsGetStakerRewards()**](RewardsApi.md#rewardsGetStakerRewards) | **GET** /v1/rewards/stakers/{address} | Get staker cycle rewards |
| [**rewardsGetStakerRewardsCount()**](RewardsApi.md#rewardsGetStakerRewardsCount) | **GET** /v1/rewards/stakers/{address}/count | Get staker cycle rewards count |


## `rewardsGetBakerRewards()`

```php
rewardsGetBakerRewards($address, $cycle, $sort, $offset, $limit, $select, $quote): \Tzkt\Model\BakerRewards[]
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
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by cycle.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetActivityQuoteParameter(); // \Tzkt\Model\AccountsGetActivityQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->rewardsGetBakerRewards($address, $cycle, $sort, $offset, $limit, $select, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetBakerRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Baker address. | |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by cycle. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |
| **quote** | [**\Tzkt\Model\AccountsGetActivityQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

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
rewardsGetDelegatorRewards($address, $cycle, $sort, $offset, $limit, $select, $quote): \Tzkt\Model\DelegatorRewards[]
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
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by cycle.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetActivityQuoteParameter(); // \Tzkt\Model\AccountsGetActivityQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->rewardsGetDelegatorRewards($address, $cycle, $sort, $offset, $limit, $select, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetDelegatorRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Delegator address. | |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by cycle. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |
| **quote** | [**\Tzkt\Model\AccountsGetActivityQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

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

Returns baker rewards for the specified cycle with all delegators and stakers (both snapshotted and actual ones). This endpoint helps to distribute delegation rewards between delegators in proportion to their delegated balances.

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
$offset = 0; // int | Specifies how many delegators/stakers in the reward split should be skipped
$limit = 100; // int | Maximum number of delegators/stakers to return

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
| **offset** | **int**| Specifies how many delegators/stakers in the reward split should be skipped | [optional] [default to 0] |
| **limit** | **int**| Maximum number of delegators/stakers to return | [optional] [default to 100] |

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

## `rewardsGetRewardSplitMember()`

```php
rewardsGetRewardSplitMember($baker, $cycle, $member): \Tzkt\Model\SplitMember
```

Get reward split member

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
$member = 'member_example'; // string | Member address

try {
    $result = $apiInstance->rewardsGetRewardSplitMember($baker, $cycle, $member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetRewardSplitMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baker** | **string**| Baker address | |
| **cycle** | **int**| Reward split cycle | |
| **member** | **string**| Member address | |

### Return type

[**\Tzkt\Model\SplitMember**](../Model/SplitMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rewardsGetStakerRewards()`

```php
rewardsGetStakerRewards($address, $cycle, $sort, $offset, $limit, $select, $quote): \Tzkt\Model\StakerRewards[]
```

Get staker cycle rewards

Returns a list of staker rewards.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Staker address.
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by cycle.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetActivityQuoteParameter(); // \Tzkt\Model\AccountsGetActivityQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->rewardsGetStakerRewards($address, $cycle, $sort, $offset, $limit, $select, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetStakerRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Staker address. | |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by cycle. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |
| **quote** | [**\Tzkt\Model\AccountsGetActivityQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Tzkt\Model\StakerRewards[]**](../Model/StakerRewards.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rewardsGetStakerRewardsCount()`

```php
rewardsGetStakerRewardsCount($address): int
```

Get staker cycle rewards count

Returns total number of cycles where the staker was staking to an active baker

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Staker address

try {
    $result = $apiInstance->rewardsGetStakerRewardsCount($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->rewardsGetStakerRewardsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Staker address | |

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
