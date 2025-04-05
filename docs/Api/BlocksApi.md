# Tzkt\BlocksApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blocksGet()**](BlocksApi.md#blocksGet) | **GET** /v1/blocks | Get blocks |
| [**blocksGetByDate()**](BlocksApi.md#blocksGetByDate) | **GET** /v1/blocks/{timestamp} | Get block by timestamp |
| [**blocksGetByDate2()**](BlocksApi.md#blocksGetByDate2) | **GET** /v1/blocks/{timestamp}/level | Get level by timestamp |
| [**blocksGetByHash()**](BlocksApi.md#blocksGetByHash) | **GET** /v1/blocks/{hash} | Get block by hash |
| [**blocksGetByLevel()**](BlocksApi.md#blocksGetByLevel) | **GET** /v1/blocks/{level} | Get block by level |
| [**blocksGetByLevel2()**](BlocksApi.md#blocksGetByLevel2) | **GET** /v1/blocks/{level}/timestamp | Get timestamp by level |
| [**blocksGetCount()**](BlocksApi.md#blocksGetCount) | **GET** /v1/blocks/count | Get blocks count |


## `blocksGet()`

```php
blocksGet($baker, $anyof, $proposer, $producer, $level, $timestamp, $priority, $block_round, $select, $sort, $offset, $limit, $quote): \Tzkt\Model\Block[]
```

Get blocks

Returns a list of blocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | [DEPRECATED]
$anyof = new \Tzkt\Model\\Tzkt\Model\BlocksGetAnyofParameter(); // \Tzkt\Model\BlocksGetAnyofParameter | Filters by any of the specified fields. Example: `anyof.proposer.producer=tz1...`.
$proposer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filters blocks by block proposer. Allowed fields for `.eqx` mode: none.
$producer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filters blocks by block producer. Allowed fields for `.eqx` mode: none.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters blocks by level.
$timestamp = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // \Tzkt\Model\AccountsGetOperationsTimestampParameter | Filters blocks by timestamp.
$priority = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | [DEPRECATED]
$block_round = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters blocks by block round.
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts blocks by specified field. Supported fields: `id` (default), `level`, `payloadRound`, `blockRound`, `validations`, `reward`, `bonus`, `fees`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // \Tzkt\Model\AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->blocksGet($baker, $anyof, $proposer, $producer, $level, $timestamp, $priority, $block_round, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| [DEPRECATED] | [optional] |
| **anyof** | [**\Tzkt\Model\BlocksGetAnyofParameter**](../Model/.md)| Filters by any of the specified fields. Example: &#x60;anyof.proposer.producer&#x3D;tz1...&#x60;. | [optional] |
| **proposer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filters blocks by block proposer. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **producer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filters blocks by block producer. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters blocks by level. | [optional] |
| **timestamp** | [**\Tzkt\Model\AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters blocks by timestamp. | [optional] |
| **priority** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| [DEPRECATED] | [optional] |
| **block_round** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters blocks by block round. | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts blocks by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;payloadRound&#x60;, &#x60;blockRound&#x60;, &#x60;validations&#x60;, &#x60;reward&#x60;, &#x60;bonus&#x60;, &#x60;fees&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**\Tzkt\Model\AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Tzkt\Model\Block[]**](../Model/Block.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksGetByDate()`

```php
blocksGetByDate($timestamp, $operations, $micheline, $quote): \Tzkt\Model\Block
```

Get block by timestamp

Returns a block closest to the specified timestamp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timestamp = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Timestamp, e.g. `2020-01-01T00:00:00Z`
$operations = false; // bool | Flag indicating whether to include block operations into returned object or not
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // \Tzkt\Model\AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->blocksGetByDate($timestamp, $operations, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksGetByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timestamp** | **\DateTime**| Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; | |
| **operations** | **bool**| Flag indicating whether to include block operations into returned object or not | [optional] [default to false] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**\Tzkt\Model\AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Tzkt\Model\Block**](../Model/Block.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksGetByDate2()`

```php
blocksGetByDate2($timestamp): int
```

Get level by timestamp

Returns a level of the block closest to the specified timestamp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timestamp = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Timestamp, e.g. `2020-01-01T00:00:00Z`

try {
    $result = $apiInstance->blocksGetByDate2($timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksGetByDate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timestamp** | **\DateTime**| Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; | |

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

## `blocksGetByHash()`

```php
blocksGetByHash($hash, $operations, $micheline, $quote): \Tzkt\Model\Block
```

Get block by hash

Returns a block with the specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Block hash
$operations = false; // bool | Flag indicating whether to include block operations into returned object or not
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // \Tzkt\Model\AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->blocksGetByHash($hash, $operations, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksGetByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Block hash | |
| **operations** | **bool**| Flag indicating whether to include block operations into returned object or not | [optional] [default to false] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**\Tzkt\Model\AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Tzkt\Model\Block**](../Model/Block.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksGetByLevel()`

```php
blocksGetByLevel($level, $operations, $micheline, $quote): \Tzkt\Model\Block
```

Get block by level

Returns a block at the specified level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = 56; // int | Block level
$operations = false; // bool | Flag indicating whether to include block operations into returned object or not
$micheline = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // \Tzkt\Model\AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // \Tzkt\Model\AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->blocksGetByLevel($level, $operations, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksGetByLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | **int**| Block level | |
| **operations** | **bool**| Flag indicating whether to include block operations into returned object or not | [optional] [default to false] |
| **micheline** | [**\Tzkt\Model\AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**\Tzkt\Model\AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Tzkt\Model\Block**](../Model/Block.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksGetByLevel2()`

```php
blocksGetByLevel2($level): \DateTime
```

Get timestamp by level

Returns a timestamp of the block at the specified level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = 56; // int | Block level

try {
    $result = $apiInstance->blocksGetByLevel2($level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksGetByLevel2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | **int**| Block level | |

### Return type

**\DateTime**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksGetCount()`

```php
blocksGetCount(): int
```

Get blocks count

Returns the total number of blocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->blocksGetCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksGetCount: ', $e->getMessage(), PHP_EOL;
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
