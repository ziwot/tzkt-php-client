# Tzkt\StakingApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stakingGetStakingUpdates()**](StakingApi.md#stakingGetStakingUpdates) | **GET** /v1/staking/updates | Get staking updates |
| [**stakingGetStakingUpdatesCount()**](StakingApi.md#stakingGetStakingUpdatesCount) | **GET** /v1/staking/updates/count | Get staking updates count |
| [**stakingGetUnstakeRequests()**](StakingApi.md#stakingGetUnstakeRequests) | **GET** /v1/staking/unstake_requests | Get unstake requests |
| [**stakingGetUnstakeRequestsCount()**](StakingApi.md#stakingGetUnstakeRequestsCount) | **GET** /v1/staking/unstake_requests/count | Get unstake requests count |


## `stakingGetStakingUpdates()`

```php
stakingGetStakingUpdates($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $sort, $offset, $limit, $select): \Tzkt\Model\StakingUpdate[]
```

Get staking updates

Returns a list of staking updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\StakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details.
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details.
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details.
$baker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by related baker.   Click on the parameter to expand more details.
$staker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by related staker.   Click on the parameter to expand more details.
$type = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter | Filter by staking update type.   Click on the parameter to expand more details.
$amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$pseudotokens = new \Tzkt\Model\\Tzkt\Model\AccountsGetStakedPseudotokensParameter(); // \Tzkt\Model\AccountsGetStakedPseudotokensParameter | Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details.
$rounding_error = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by protocol rounding error.   Click on the parameter to expand more details.
$autostaking_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$staking_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$delegation_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_baking_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_endorsing_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_preendorsing_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->stakingGetStakingUpdates($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StakingApi->stakingGetStakingUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. | [optional] |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. | [optional] |
| **baker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by related baker.   Click on the parameter to expand more details. | [optional] |
| **staker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by related staker.   Click on the parameter to expand more details. | [optional] |
| **type** | [**\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter**](../Model/.md)| Filter by staking update type.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **pseudotokens** | [**\Tzkt\Model\AccountsGetStakedPseudotokensParameter**](../Model/.md)| Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. | [optional] |
| **rounding_error** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by protocol rounding error.   Click on the parameter to expand more details. | [optional] |
| **autostaking_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **staking_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **delegation_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_baking_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_endorsing_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_preendorsing_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\StakingUpdate[]**](../Model/StakingUpdate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stakingGetStakingUpdatesCount()`

```php
stakingGetStakingUpdatesCount($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id): int
```

Get staking updates count

Returns a total number of staking updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\StakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details.
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details.
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details.
$baker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by related baker.   Click on the parameter to expand more details.
$staker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by related staker.   Click on the parameter to expand more details.
$type = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter | Filter by staking update type.   Click on the parameter to expand more details.
$amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$pseudotokens = new \Tzkt\Model\\Tzkt\Model\AccountsGetStakedPseudotokensParameter(); // \Tzkt\Model\AccountsGetStakedPseudotokensParameter | Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details.
$rounding_error = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by protocol rounding error.   Click on the parameter to expand more details.
$autostaking_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$staking_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$delegation_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_baking_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_endorsing_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_preendorsing_op_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->stakingGetStakingUpdatesCount($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StakingApi->stakingGetStakingUpdatesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. | [optional] |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. | [optional] |
| **baker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by related baker.   Click on the parameter to expand more details. | [optional] |
| **staker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by related staker.   Click on the parameter to expand more details. | [optional] |
| **type** | [**\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter**](../Model/.md)| Filter by staking update type.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **pseudotokens** | [**\Tzkt\Model\AccountsGetStakedPseudotokensParameter**](../Model/.md)| Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. | [optional] |
| **rounding_error** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by protocol rounding error.   Click on the parameter to expand more details. | [optional] |
| **autostaking_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **staking_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **delegation_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_baking_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_endorsing_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_preendorsing_op_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |

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

## `stakingGetUnstakeRequests()`

```php
stakingGetUnstakeRequests($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Tzkt\Model\UnstakeRequest[]
```

Get unstake requests

Returns a list of unstake requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\StakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by cycle.   Click on the parameter to expand more details.
$baker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by related baker.   Click on the parameter to expand more details.
$staker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by related staker. If staker is null, then it's aggregated unstaked deposits for the baker.   Click on the parameter to expand more details.
$requested_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by requested amount.   Click on the parameter to expand more details.
$restaked_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by restaked amount.   Click on the parameter to expand more details.
$finalized_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by finalized amount.   Click on the parameter to expand more details.
$slashed_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by slashed amount.   Click on the parameter to expand more details.
$rounding_error = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by protocol rounding error.   Click on the parameter to expand more details.
$actual_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by actual amount.   Click on the parameter to expand more details.
$status = new \Tzkt\Model\\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter(); // \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter | Filter by status.   Click on the parameter to expand more details.
$updates_count = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by staking updates count.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->stakingGetUnstakeRequests($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StakingApi->stakingGetUnstakeRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by cycle.   Click on the parameter to expand more details. | [optional] |
| **baker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by related baker.   Click on the parameter to expand more details. | [optional] |
| **staker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. | [optional] |
| **requested_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by requested amount.   Click on the parameter to expand more details. | [optional] |
| **restaked_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by restaked amount.   Click on the parameter to expand more details. | [optional] |
| **finalized_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by finalized amount.   Click on the parameter to expand more details. | [optional] |
| **slashed_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by slashed amount.   Click on the parameter to expand more details. | [optional] |
| **rounding_error** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by protocol rounding error.   Click on the parameter to expand more details. | [optional] |
| **actual_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by actual amount.   Click on the parameter to expand more details. | [optional] |
| **status** | [**\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter**](../Model/.md)| Filter by status.   Click on the parameter to expand more details. | [optional] |
| **updates_count** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by staking updates count.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\UnstakeRequest[]**](../Model/UnstakeRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stakingGetUnstakeRequestsCount()`

```php
stakingGetUnstakeRequestsCount($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time): int
```

Get unstake requests count

Returns a total number of unstake requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\StakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by cycle.   Click on the parameter to expand more details.
$baker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by related baker.   Click on the parameter to expand more details.
$staker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by related staker. If staker is null, then it's aggregated unstaked deposits for the baker.   Click on the parameter to expand more details.
$requested_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by requested amount.   Click on the parameter to expand more details.
$restaked_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by restaked amount.   Click on the parameter to expand more details.
$finalized_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by finalized amount.   Click on the parameter to expand more details.
$slashed_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by slashed amount.   Click on the parameter to expand more details.
$rounding_error = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by protocol rounding error.   Click on the parameter to expand more details.
$actual_amount = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by actual amount.   Click on the parameter to expand more details.
$status = new \Tzkt\Model\\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter(); // \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter | Filter by status.   Click on the parameter to expand more details.
$updates_count = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by staking updates count.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->stakingGetUnstakeRequestsCount($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StakingApi->stakingGetUnstakeRequestsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by cycle.   Click on the parameter to expand more details. | [optional] |
| **baker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by related baker.   Click on the parameter to expand more details. | [optional] |
| **staker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. | [optional] |
| **requested_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by requested amount.   Click on the parameter to expand more details. | [optional] |
| **restaked_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by restaked amount.   Click on the parameter to expand more details. | [optional] |
| **finalized_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by finalized amount.   Click on the parameter to expand more details. | [optional] |
| **slashed_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by slashed amount.   Click on the parameter to expand more details. | [optional] |
| **rounding_error** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by protocol rounding error.   Click on the parameter to expand more details. | [optional] |
| **actual_amount** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by actual amount.   Click on the parameter to expand more details. | [optional] |
| **status** | [**\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter**](../Model/.md)| Filter by status.   Click on the parameter to expand more details. | [optional] |
| **updates_count** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by staking updates count.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. | [optional] |

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
