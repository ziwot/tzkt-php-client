# Tzkt\BigMapsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bigMapsGetBigMapById()**](BigMapsApi.md#bigMapsGetBigMapById) | **GET** /v1/bigmaps/{id} | Get bigmap by Id |
| [**bigMapsGetBigMapKeys()**](BigMapsApi.md#bigMapsGetBigMapKeys) | **GET** /v1/bigmaps/keys | Get bigmap keys |
| [**bigMapsGetBigMapType()**](BigMapsApi.md#bigMapsGetBigMapType) | **GET** /v1/bigmaps/{id}/type | Get bigmap type |
| [**bigMapsGetBigMapUpdates()**](BigMapsApi.md#bigMapsGetBigMapUpdates) | **GET** /v1/bigmaps/updates/count | Get bigmap updates count |
| [**bigMapsGetBigMapUpdates2()**](BigMapsApi.md#bigMapsGetBigMapUpdates2) | **GET** /v1/bigmaps/updates | Get bigmap updates |
| [**bigMapsGetBigMaps()**](BigMapsApi.md#bigMapsGetBigMaps) | **GET** /v1/bigmaps | Get bigmaps |
| [**bigMapsGetBigMapsCount()**](BigMapsApi.md#bigMapsGetBigMapsCount) | **GET** /v1/bigmaps/count | Get bigmaps count |
| [**bigMapsGetHistoricalKeys()**](BigMapsApi.md#bigMapsGetHistoricalKeys) | **GET** /v1/bigmaps/{id}/historical_keys/{level} | Get historical keys |
| [**bigMapsGetKey()**](BigMapsApi.md#bigMapsGetKey) | **GET** /v1/bigmaps/{id}/keys/{key} | Get bigmap key |
| [**bigMapsGetKey2()**](BigMapsApi.md#bigMapsGetKey2) | **GET** /v1/bigmaps/{id}/historical_keys/{level}/{key} | Get historical key |
| [**bigMapsGetKeyUpdates()**](BigMapsApi.md#bigMapsGetKeyUpdates) | **GET** /v1/bigmaps/{id}/keys/{key}/updates | Get bigmap key updates |
| [**bigMapsGetKeys()**](BigMapsApi.md#bigMapsGetKeys) | **GET** /v1/bigmaps/{id}/keys | Get bigmap keys |


## `bigMapsGetBigMapById()`

```php
bigMapsGetBigMapById($id, $micheline): \Tzkt\Model\BigMap
```

Get bigmap by Id

Returns a bigmap with the specified Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Bigmap Id
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the bigmap key and value type: `0` - JSON, `2` - Micheline

try {
    $result = $apiInstance->bigMapsGetBigMapById($id, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetBigMapById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Bigmap Id | |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline | [optional] |

### Return type

[**\Tzkt\Model\BigMap**](../Model/BigMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetBigMapKeys()`

```php
bigMapsGetBigMapKeys($id, $bigmap, $active, $hash, $key, $value, $first_level, $first_time, $last_level, $last_time, $updates, $sort, $offset, $limit, $select, $micheline): \Tzkt\Model\BigMapKeyFull[]
```

Get bigmap keys

Returns a list of all bigmap keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$bigmap = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by bigmap ptr.   Click on the parameter to expand more details.
$active = True; // bool | Filters by status: `true` - active, `false` - removed.
$hash = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysHashParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysHashParameter | Filter by key hash.   Click on the parameter to expand more details.
$key = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by key.   Note, this parameter supports the following format: `key{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?key.foo.in=bar,baz`).   Click on the parameter to expand more details.
$value = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by value.   Note, this parameter supports the following format: `value{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?value.foo.in=bar,baz`).   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the key was first seen.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the key was first seen.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the key was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the key was last seen.   Click on the parameter to expand more details.
$updates = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by number of actions with the bigmap key.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the `key` and `value` fields: `0` - JSON, `2` - Micheline

try {
    $result = $apiInstance->bigMapsGetBigMapKeys($id, $bigmap, $active, $hash, $key, $value, $first_level, $first_time, $last_level, $last_time, $updates, $sort, $offset, $limit, $select, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetBigMapKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **bigmap** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by bigmap ptr.   Click on the parameter to expand more details. | [optional] |
| **active** | **bool**| Filters by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. | [optional] |
| **hash** | [**\Tzkt\Model\BigMapsGetBigMapKeysHashParameter**](../Model/.md)| Filter by key hash.   Click on the parameter to expand more details. | [optional] |
| **key** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by key.   Note, this parameter supports the following format: &#x60;key{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?key.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. | [optional] |
| **value** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by value.   Note, this parameter supports the following format: &#x60;value{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?value.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the key was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the key was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the key was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the key was last seen.   Click on the parameter to expand more details. | [optional] |
| **updates** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by number of actions with the bigmap key.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the &#x60;key&#x60; and &#x60;value&#x60; fields: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline | [optional] |

### Return type

[**\Tzkt\Model\BigMapKeyFull[]**](../Model/BigMapKeyFull.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetBigMapType()`

```php
bigMapsGetBigMapType($id): \Tzkt\Model\MichelinePrim
```

Get bigmap type

Returns a type of the bigmap with the specified Id in Micheline format (with annotations).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Bigmap Id

try {
    $result = $apiInstance->bigMapsGetBigMapType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetBigMapType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Bigmap Id | |

### Return type

[**\Tzkt\Model\MichelinePrim**](../Model/MichelinePrim.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetBigMapUpdates()`

```php
bigMapsGetBigMapUpdates($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp): \Tzkt\Model\BigMapUpdate[]
```

Get bigmap updates count

Returns a total number of bigmap updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bigmap = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters by bigmap ptr
$path = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // \Tzkt\Model\AccountsGetOperationsEntrypointParameter | Filters by bigmap path
$contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filters by bigmap contract
$tags = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapsTagsParameter(); // \Tzkt\Model\BigMapsGetBigMapsTagsParameter | Filters by bigmap tags: `metadata`, `token_metadata`, `ledger`
$action = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter(); // \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter | Filters by action
$value = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filters by JSON value. Note, this query parameter supports the following format: `?value{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?value.balance.gt=...`.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters by level
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filters by timestamp

try {
    $result = $apiInstance->bigMapsGetBigMapUpdates($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetBigMapUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bigmap** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters by bigmap ptr | [optional] |
| **path** | [**\Tzkt\Model\AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filters by bigmap path | [optional] |
| **contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filters by bigmap contract | [optional] |
| **tags** | [**\Tzkt\Model\BigMapsGetBigMapsTagsParameter**](../Model/.md)| Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; | [optional] |
| **action** | [**\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter**](../Model/.md)| Filters by action | [optional] |
| **value** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters by level | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filters by timestamp | [optional] |

### Return type

[**\Tzkt\Model\BigMapUpdate[]**](../Model/BigMapUpdate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetBigMapUpdates2()`

```php
bigMapsGetBigMapUpdates2($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $sort, $offset, $limit, $micheline): \Tzkt\Model\BigMapUpdate[]
```

Get bigmap updates

Returns a list of all bigmap updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bigmap = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters by bigmap ptr
$path = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // \Tzkt\Model\AccountsGetOperationsEntrypointParameter | Filters by bigmap path
$contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filters by bigmap contract
$tags = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapsTagsParameter(); // \Tzkt\Model\BigMapsGetBigMapsTagsParameter | Filters by bigmap tags: `metadata`, `token_metadata`, `ledger`
$action = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter(); // \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter | Filters by action
$value = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filters by JSON value. Note, this query parameter supports the following format: `?value{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?value.balance.gt=...`.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters by level
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filters by timestamp
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts bigmaps by specified field. Supported fields: `id` (default), `ptr`, `firstLevel`, `lastLevel`, `totalKeys`, `activeKeys`, `updates`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the bigmap key and value type: `0` - JSON, `2` - Micheline

try {
    $result = $apiInstance->bigMapsGetBigMapUpdates2($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetBigMapUpdates2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bigmap** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters by bigmap ptr | [optional] |
| **path** | [**\Tzkt\Model\AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filters by bigmap path | [optional] |
| **contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filters by bigmap contract | [optional] |
| **tags** | [**\Tzkt\Model\BigMapsGetBigMapsTagsParameter**](../Model/.md)| Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; | [optional] |
| **action** | [**\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter**](../Model/.md)| Filters by action | [optional] |
| **value** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters by level | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filters by timestamp | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline | [optional] |

### Return type

[**\Tzkt\Model\BigMapUpdate[]**](../Model/BigMapUpdate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetBigMaps()`

```php
bigMapsGetBigMaps($contract, $path, $tags, $active, $last_level, $select, $sort, $offset, $limit, $micheline): \Tzkt\Model\BigMap[]
```

Get bigmaps

Returns a list of bigmaps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filters bigmaps by smart contract address.
$path = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // \Tzkt\Model\AccountsGetOperationsEntrypointParameter | Filters bigmaps by path in the contract storage.
$tags = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapsTagsParameter(); // \Tzkt\Model\BigMapsGetBigMapsTagsParameter | Filters bigmaps by tags: `metadata`, `token_metadata`, `ledger`.
$active = True; // bool | Filters bigmaps by status: `true` - active, `false` - removed.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters bigmaps by the last update level.
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts bigmaps by specified field. Supported fields: `id` (default), `ptr`, `firstLevel`, `lastLevel`, `totalKeys`, `activeKeys`, `updates`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the bigmap key and value type: `0` - JSON, `2` - Micheline

try {
    $result = $apiInstance->bigMapsGetBigMaps($contract, $path, $tags, $active, $last_level, $select, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetBigMaps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filters bigmaps by smart contract address. | [optional] |
| **path** | [**\Tzkt\Model\AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filters bigmaps by path in the contract storage. | [optional] |
| **tags** | [**\Tzkt\Model\BigMapsGetBigMapsTagsParameter**](../Model/.md)| Filters bigmaps by tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;. | [optional] |
| **active** | **bool**| Filters bigmaps by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters bigmaps by the last update level. | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline | [optional] |

### Return type

[**\Tzkt\Model\BigMap[]**](../Model/BigMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetBigMapsCount()`

```php
bigMapsGetBigMapsCount(): int
```

Get bigmaps count

Returns the total number of bigmaps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->bigMapsGetBigMapsCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetBigMapsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `bigMapsGetHistoricalKeys()`

```php
bigMapsGetHistoricalKeys($id, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline): \Tzkt\Model\BigMapKeyHistorical[]
```

Get historical keys

Returns a list of bigmap keys at the specific block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Bigmap Id
$level = 56; // int | Level of the block at which you want to get bigmap keys
$active = True; // bool | Filters keys by status: `true` - active, `false` - removed.
$key = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filters keys by JSON key. Note, this query parameter supports the following format: `?key{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?key.token_id=...`.
$value = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filters keys by JSON value. Note, this query parameter supports the following format: `?value{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?value.balance.gt=...`.
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts bigmap keys by specified field. Supported fields: `id` (default).
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->bigMapsGetHistoricalKeys($id, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetHistoricalKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Bigmap Id | |
| **level** | **int**| Level of the block at which you want to get bigmap keys | |
| **active** | **bool**| Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. | [optional] |
| **key** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. | [optional] |
| **value** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional] |

### Return type

[**\Tzkt\Model\BigMapKeyHistorical[]**](../Model/BigMapKeyHistorical.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetKey()`

```php
bigMapsGetKey($id, $key, $micheline): \Tzkt\Model\BigMapKey
```

Get bigmap key

Returns the specified bigmap key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Bigmap Id
$key = 'key_example'; // string | Either a key hash (`expr123...`) or a plain value (`foo...`).             Even if the key is complex (an object or an array), you can specify it as is, for example, `/keys/{\"address\":\"tz123\",\"nat\":\"123\"}`.
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->bigMapsGetKey($id, $key, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Bigmap Id | |
| **key** | **string**| Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. | |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional] |

### Return type

[**\Tzkt\Model\BigMapKey**](../Model/BigMapKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetKey2()`

```php
bigMapsGetKey2($id, $level, $key, $micheline): \Tzkt\Model\BigMapKeyHistorical
```

Get historical key

Returns the specified bigmap key at the specific block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Bigmap Id
$level = 56; // int | Level of the block at which you want to get bigmap key
$key = 'key_example'; // string | Either a key hash (`expr123...`) or a plain value (`foo...`).             Even if the key is complex (an object or an array), you can specify it as is, for example, `/keys/{\"address\":\"tz123\",\"nat\":\"123\"}`.
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->bigMapsGetKey2($id, $level, $key, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetKey2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Bigmap Id | |
| **level** | **int**| Level of the block at which you want to get bigmap key | |
| **key** | **string**| Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. | |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional] |

### Return type

[**\Tzkt\Model\BigMapKeyHistorical**](../Model/BigMapKeyHistorical.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetKeyUpdates()`

```php
bigMapsGetKeyUpdates($id, $key, $sort, $offset, $limit, $micheline): \Tzkt\Model\BigMapKeyUpdate[]
```

Get bigmap key updates

Returns updates history for the specified bigmap key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Bigmap Id
$key = 'key_example'; // string | Either a key hash (`expr123...`) or a plain value (`foo...`).             Even if the key is complex (an object or an array), you can specify it as is, for example, `/keys/{\"address\":\"tz123\",\"nat\":\"123\"}`.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts bigmap updates by specified field. Supported fields: `id` (default).
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the key value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->bigMapsGetKeyUpdates($id, $key, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetKeyUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Bigmap Id | |
| **key** | **string**| Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. | |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional] |

### Return type

[**\Tzkt\Model\BigMapKeyUpdate[]**](../Model/BigMapKeyUpdate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bigMapsGetKeys()`

```php
bigMapsGetKeys($id, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline): \Tzkt\Model\BigMapKey[]
```

Get bigmap keys

Returns a list of bigmap keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BigMapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Bigmap Id
$active = True; // bool | Filters keys by status: `true` - active, `false` - removed.
$key = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filters keys by JSON key. Note, this query parameter supports the following format: `?key{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?key.token_id=...`.
$value = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filters keys by JSON value. Note, this query parameter supports the following format: `?value{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?value.balance.gt=...`.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters bigmap keys by the last update level.
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts bigmap keys by specified field. Supported fields: `id` (default), `firstLevel`, `lastLevel`, `updates`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->bigMapsGetKeys($id, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BigMapsApi->bigMapsGetKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Bigmap Id | |
| **active** | **bool**| Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. | [optional] |
| **key** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. | [optional] |
| **value** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters bigmap keys by the last update level. | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional] |

### Return type

[**\Tzkt\Model\BigMapKey[]**](../Model/BigMapKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
