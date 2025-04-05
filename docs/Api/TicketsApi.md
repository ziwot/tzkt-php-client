# Tzkt\TicketsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ticketsGetHistoricalTicketBalances()**](TicketsApi.md#ticketsGetHistoricalTicketBalances) | **GET** /v1/tickets/historical_balances/{level} | Get historical ticket balances |
| [**ticketsGetTicketBalances()**](TicketsApi.md#ticketsGetTicketBalances) | **GET** /v1/tickets/balances | Get ticket balances |
| [**ticketsGetTicketBalancesCount()**](TicketsApi.md#ticketsGetTicketBalancesCount) | **GET** /v1/tickets/balances/count | Get ticket balances count |
| [**ticketsGetTicketTransfers()**](TicketsApi.md#ticketsGetTicketTransfers) | **GET** /v1/tickets/transfers | Get ticket transfers |
| [**ticketsGetTicketTransfersCount()**](TicketsApi.md#ticketsGetTicketTransfersCount) | **GET** /v1/tickets/transfers/count | Get ticket transfers count |
| [**ticketsGetTickets()**](TicketsApi.md#ticketsGetTickets) | **GET** /v1/tickets | Get tickets |
| [**ticketsGetTicketsCount()**](TicketsApi.md#ticketsGetTicketsCount) | **GET** /v1/tickets/count | Get tickets count |


## `ticketsGetHistoricalTicketBalances()`

```php
ticketsGetHistoricalTicketBalances($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select): \Tzkt\Model\TicketBalanceShort[]
```

Get historical ticket balances

Returns a list of ticket balances at the end of the specified block. Note, this endpoint is quite heavy, therefore at least one of the filters (`account`, `ticket.id`, `ticket.ticketer`) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = 56; // int | Level of the block at the end of which historical balances must be calculated
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$account = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$balance = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->ticketsGetHistoricalTicketBalances($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetHistoricalTicketBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | **int**| Level of the block at the end of which historical balances must be calculated | |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **account** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\TicketBalanceShort[]**](../Model/TicketBalanceShort.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsGetTicketBalances()`

```php
ticketsGetTicketBalances($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Tzkt\Model\TicketBalance[]
```

Get ticket balances

Returns a list of ticket balances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$ticket_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$ticket_raw_type = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$ticket_raw_content = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$ticket_content = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$ticket_type_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$ticket_content_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$account = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$balance = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$transfers_count = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by number of transfers.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->ticketsGetTicketBalances($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_type** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_content** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_content** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **ticket_type_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **ticket_content_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **account** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **transfers_count** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by number of transfers.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\TicketBalance[]**](../Model/TicketBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsGetTicketBalancesCount()`

```php
ticketsGetTicketBalancesCount($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time): int
```

Get ticket balances count

Returns a total number of ticket balances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$ticket_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$ticket_raw_type = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$ticket_raw_content = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$ticket_content = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$ticket_type_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$ticket_content_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$account = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$balance = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$transfers_count = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by number of transfers.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->ticketsGetTicketBalancesCount($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketBalancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_type** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_content** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_content** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **ticket_type_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **ticket_content_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **account** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **transfers_count** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by number of transfers.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |

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

## `ticketsGetTicketTransfers()`

```php
ticketsGetTicketTransfers($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select): \Tzkt\Model\TicketTransfer[]
```

Get ticket transfers

Returns a list of ticket transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the transfer was made.   Click on the parameter to expand more details.
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details.
$ticket_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$ticket_raw_type = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$ticket_raw_content = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$ticket_content = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$ticket_type_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$ticket_content_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$anyof = new \Tzkt\Model\\Tzkt\Model\BlocksGetAnyofParameter(); // \Tzkt\Model\BlocksGetAnyofParameter | Filter by any of the specified fields (`from` or `to`). Example: `anyof.from.to=tz1...` will return transfers where `from` OR `to` is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details.
$from = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by sender address.   Click on the parameter to expand more details.
$to = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by recepient address.   Click on the parameter to expand more details.
$amount = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$transaction_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details.
$transfer_ticket_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details.
$smart_rollup_execute_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->ticketsGetTicketTransfers($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_type** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_content** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_content** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **ticket_type_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **ticket_content_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **anyof** | [**\Tzkt\Model\BlocksGetAnyofParameter**](../Model/.md)| Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. | [optional] |
| **from** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by sender address.   Click on the parameter to expand more details. | [optional] |
| **to** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by recepient address.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **transaction_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **transfer_ticket_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **smart_rollup_execute_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\TicketTransfer[]**](../Model/TicketTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsGetTicketTransfersCount()`

```php
ticketsGetTicketTransfersCount($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id): int
```

Get ticket transfers count

Returns the total number of ticket transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the transfer was made.   Click on the parameter to expand more details.
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details.
$ticket_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$ticket_raw_type = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$ticket_raw_content = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$ticket_content = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$ticket_type_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$ticket_content_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$anyof = new \Tzkt\Model\\Tzkt\Model\BlocksGetAnyofParameter(); // \Tzkt\Model\BlocksGetAnyofParameter | Filter by any of the specified fields (`from` or `to`). Example: `anyof.from.to=tz1...` will return transfers where `from` OR `to` is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details.
$from = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by sender address.   Click on the parameter to expand more details.
$to = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by recepient address.   Click on the parameter to expand more details.
$amount = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$transaction_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details.
$transfer_ticket_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details.
$smart_rollup_execute_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->ticketsGetTicketTransfersCount($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketTransfersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_type** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_content** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_content** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **ticket_type_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **ticket_content_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **anyof** | [**\Tzkt\Model\BlocksGetAnyofParameter**](../Model/.md)| Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. | [optional] |
| **from** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by sender address.   Click on the parameter to expand more details. | [optional] |
| **to** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by recepient address.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **transaction_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **transfer_ticket_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **smart_rollup_execute_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |

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

## `ticketsGetTickets()`

```php
ticketsGetTickets($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Tzkt\Model\Ticket[]
```

Get tickets

Returns a list of tickets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$ticketer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$raw_type = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$raw_content = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$content = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$type_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$content_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$first_minter = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by address of the first minter.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->ticketsGetTickets($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **ticketer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **raw_type** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **raw_content** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **content** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **type_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **content_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **first_minter** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by address of the first minter.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsGetTicketsCount()`

```php
ticketsGetTicketsCount($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time): int
```

Get tickets count

Returns a total number of tickets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$ticketer = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$raw_type = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$raw_content = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$content = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$type_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$content_hash = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$first_minter = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by address of the first minter.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->ticketsGetTicketsCount($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **ticketer** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **raw_type** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **raw_content** | [**\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **content** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **type_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **content_hash** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **first_minter** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by address of the first minter.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. | [optional] |

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
