# Tzkt\EventsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventsGetContractEvents()**](EventsApi.md#eventsGetContractEvents) | **GET** /v1/contracts/events | Get contract events |
| [**eventsGetContractEventsCount()**](EventsApi.md#eventsGetContractEventsCount) | **GET** /v1/contracts/events/count | Get contract events count |


## `eventsGetContractEvents()`

```php
eventsGetContractEvents($id, $level, $timestamp, $contract, $code_hash, $tag, $payload, $transaction_id, $sort, $offset, $limit, $select): \Tzkt\Model\ContractEvent[]
```

Get contract events

Returns a list of contract events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the event was emitted.   Click on the parameter to expand more details.
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the event was emitted.   Click on the parameter to expand more details.
$contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$code_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by hash of the code of the contract emitted the event.   Click on the parameter to expand more details.
$tag = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // \Tzkt\Model\AccountsGetOperationsEntrypointParameter | Filter by event tag.   Click on the parameter to expand more details.
$payload = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by payload.   Note, this parameter supports the following format: `payload{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?payload.foo.bar.in=1,2,3`).   Click on the parameter to expand more details.
$transaction_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by id of the transaction, in which the event was emitted.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->eventsGetContractEvents($id, $level, $timestamp, $contract, $code_hash, $tag, $payload, $transaction_id, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetContractEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the event was emitted.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the event was emitted.   Click on the parameter to expand more details. | [optional] |
| **contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **code_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by hash of the code of the contract emitted the event.   Click on the parameter to expand more details. | [optional] |
| **tag** | [**\Tzkt\Model\AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filter by event tag.   Click on the parameter to expand more details. | [optional] |
| **payload** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by payload.   Note, this parameter supports the following format: &#x60;payload{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?payload.foo.bar.in&#x3D;1,2,3&#x60;).   Click on the parameter to expand more details. | [optional] |
| **transaction_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by id of the transaction, in which the event was emitted.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\ContractEvent[]**](../Model/ContractEvent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsGetContractEventsCount()`

```php
eventsGetContractEventsCount($id, $level, $timestamp, $contract, $code_hash, $tag, $payload, $transaction_id): int
```

Get contract events count

Returns a total number of contract events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the event was emitted.   Click on the parameter to expand more details.
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the event was emitted.   Click on the parameter to expand more details.
$contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$code_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by hash of the code of the contract emitted the event.   Click on the parameter to expand more details.
$tag = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // \Tzkt\Model\AccountsGetOperationsEntrypointParameter | Filter by event tag.   Click on the parameter to expand more details.
$payload = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by payload.   Note, this parameter supports the following format: `payload{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?payload.foo.bar.in=1,2,3`).   Click on the parameter to expand more details.
$transaction_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by id of the transaction, in which the event was emitted.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->eventsGetContractEventsCount($id, $level, $timestamp, $contract, $code_hash, $tag, $payload, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetContractEventsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the event was emitted.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the event was emitted.   Click on the parameter to expand more details. | [optional] |
| **contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **code_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by hash of the code of the contract emitted the event.   Click on the parameter to expand more details. | [optional] |
| **tag** | [**\Tzkt\Model\AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filter by event tag.   Click on the parameter to expand more details. | [optional] |
| **payload** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by payload.   Note, this parameter supports the following format: &#x60;payload{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?payload.foo.bar.in&#x3D;1,2,3&#x60;).   Click on the parameter to expand more details. | [optional] |
| **transaction_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by id of the transaction, in which the event was emitted.   Click on the parameter to expand more details. | [optional] |

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
