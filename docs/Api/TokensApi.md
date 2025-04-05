# Tzkt\TokensApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tokensGetTokenBalances()**](TokensApi.md#tokensGetTokenBalances) | **GET** /v1/tokens/balances | Get token balances |
| [**tokensGetTokenBalances2()**](TokensApi.md#tokensGetTokenBalances2) | **GET** /v1/tokens/historical_balances/{level} | Get historical token balances |
| [**tokensGetTokenBalancesCount()**](TokensApi.md#tokensGetTokenBalancesCount) | **GET** /v1/tokens/balances/count | Get token balances count |
| [**tokensGetTokenTransfers()**](TokensApi.md#tokensGetTokenTransfers) | **GET** /v1/tokens/transfers | Get token transfers |
| [**tokensGetTokenTransfersCount()**](TokensApi.md#tokensGetTokenTransfersCount) | **GET** /v1/tokens/transfers/count | Get token transfers count |
| [**tokensGetTokens()**](TokensApi.md#tokensGetTokens) | **GET** /v1/tokens | Get tokens |
| [**tokensGetTokensCount()**](TokensApi.md#tokensGetTokensCount) | **GET** /v1/tokens/count | Get tokens count |


## `tokensGetTokenBalances()`

```php
tokensGetTokenBalances($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select): \Tzkt\Model\TokenBalance[]
```

Get token balances

Returns a list of token balances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$account = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$token_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Note, this is not the same as `tokenId`.   Click on the parameter to expand more details.
$token_contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$token_token_id = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by tokenId (for FA1.2 tokens tokenId is always `\"0\"`).   Click on the parameter to expand more details.
$token_standard = new \Tzkt\Model\\Tzkt\Model\TokensGetTokensCountStandardParameter(); // \Tzkt\Model\TokensGetTokensCountStandardParameter | Filter by token standard (`fa1.2` or `fa2`).   Click on the parameter to expand more details.
$token_metadata = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by metadata. Note, this parameter supports the following format: `token.metadata{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by, for example: `?token.metadata.symbol.in=kUSD,uUSD`.   Click on the parameter to expand more details.
$balance = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details.
$indexed_at = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->tokensGetTokenBalances($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensGetTokenBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **account** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **token_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. | [optional] |
| **token_contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **token_token_id** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_standard** | [**\Tzkt\Model\TokensGetTokensCountStandardParameter**](../Model/.md)| Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_metadata** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |
| **indexed_at** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)|  | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\TokenBalance[]**](../Model/TokenBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensGetTokenBalances2()`

```php
tokensGetTokenBalances2($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select): \Tzkt\Model\TokenBalanceShort[]
```

Get historical token balances

Returns a list of token balances at the end of the specified block. Note, this endpoint is quite heavy, therefore at least one of the filters (`account`, `token.id`, `token.contract` with `token.tokenId`) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = 56; // int | Level of the block at the end of which historical balances must be calculated
$account = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$token_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Note, this is not the same as `tokenId`.   Click on the parameter to expand more details.
$token_contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$token_token_id = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by tokenId (for FA1.2 tokens tokenId is always `\"0\"`).   Click on the parameter to expand more details.
$token_standard = new \Tzkt\Model\\Tzkt\Model\TokensGetTokensCountStandardParameter(); // \Tzkt\Model\TokensGetTokensCountStandardParameter | Filter by token standard (`fa1.2` or `fa2`).   Click on the parameter to expand more details.
$token_metadata = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by metadata. Note, this parameter supports the following format: `token.metadata{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by, for example: `?token.metadata.symbol.in=kUSD,uUSD`.   Click on the parameter to expand more details.
$balance = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->tokensGetTokenBalances2($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensGetTokenBalances2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | **int**| Level of the block at the end of which historical balances must be calculated | |
| **account** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **token_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. | [optional] |
| **token_contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **token_token_id** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_standard** | [**\Tzkt\Model\TokensGetTokensCountStandardParameter**](../Model/.md)| Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_metadata** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\TokenBalanceShort[]**](../Model/TokenBalanceShort.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensGetTokenBalancesCount()`

```php
tokensGetTokenBalancesCount($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at): int
```

Get token balances count

Returns a total number of token balances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$account = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$token_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Note, this is not the same as `tokenId`.   Click on the parameter to expand more details.
$token_contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$token_token_id = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by tokenId (for FA1.2 tokens tokenId is always `\"0\"`).   Click on the parameter to expand more details.
$token_standard = new \Tzkt\Model\\Tzkt\Model\TokensGetTokensCountStandardParameter(); // \Tzkt\Model\TokensGetTokensCountStandardParameter | Filter by token standard (`fa1.2` or `fa2`).   Click on the parameter to expand more details.
$token_metadata = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by metadata. Note, this parameter supports the following format: `token.metadata{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by, for example: `?token.metadata.symbol.in=kUSD,uUSD`.   Click on the parameter to expand more details.
$balance = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details.
$indexed_at = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter

try {
    $result = $apiInstance->tokensGetTokenBalancesCount($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensGetTokenBalancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **account** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **token_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. | [optional] |
| **token_contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **token_token_id** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_standard** | [**\Tzkt\Model\TokensGetTokensCountStandardParameter**](../Model/.md)| Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_metadata** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |
| **indexed_at** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)|  | [optional] |

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

## `tokensGetTokenTransfers()`

```php
tokensGetTokenTransfers($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select): \Tzkt\Model\TokenTransfer[]
```

Get token transfers

Returns a list of token transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the transfer was made.   Click on the parameter to expand more details.
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details.
$token_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Note, this is not the same as `tokenId`.   Click on the parameter to expand more details.
$token_contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$token_token_id = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by tokenId (for FA1.2 tokens tokenId is always `\"0\"`).   Click on the parameter to expand more details.
$token_standard = new \Tzkt\Model\\Tzkt\Model\TokensGetTokensCountStandardParameter(); // \Tzkt\Model\TokensGetTokensCountStandardParameter | Filter by token standard (`fa1.2` or `fa2`).   Click on the parameter to expand more details.
$token_metadata = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by metadata. Note, this parameter supports the following format: `token.metadata{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by, for example: `?token.metadata.symbol.in=kUSD,uUSD`.   Click on the parameter to expand more details.
$anyof = new \Tzkt\Model\\Tzkt\Model\BlocksGetAnyofParameter(); // \Tzkt\Model\BlocksGetAnyofParameter | Filter by any of the specified fields (`from` or `to`). Example: `anyof.from.to=tz1...` will return transfers where `from` OR `to` is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details.
$from = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by sender account address.   Click on the parameter to expand more details.
$to = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by target account address.   Click on the parameter to expand more details.
$amount = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$transaction_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details.
$origination_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details.
$migration_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details.
$indexed_at = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->tokensGetTokenTransfers($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensGetTokenTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **token_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. | [optional] |
| **token_contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **token_token_id** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_standard** | [**\Tzkt\Model\TokensGetTokensCountStandardParameter**](../Model/.md)| Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_metadata** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. | [optional] |
| **anyof** | [**\Tzkt\Model\BlocksGetAnyofParameter**](../Model/.md)| Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. | [optional] |
| **from** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by sender account address.   Click on the parameter to expand more details. | [optional] |
| **to** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by target account address.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **transaction_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. | [optional] |
| **origination_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. | [optional] |
| **migration_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. | [optional] |
| **indexed_at** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)|  | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\TokenTransfer[]**](../Model/TokenTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensGetTokenTransfersCount()`

```php
tokensGetTokenTransfersCount($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at): int
```

Get token transfers count

Returns the total number of token transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the transfer was made.   Click on the parameter to expand more details.
$timestamp = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details.
$token_id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Note, this is not the same as `tokenId`.   Click on the parameter to expand more details.
$token_contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$token_token_id = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by tokenId (for FA1.2 tokens tokenId is always `\"0\"`).   Click on the parameter to expand more details.
$token_standard = new \Tzkt\Model\\Tzkt\Model\TokensGetTokensCountStandardParameter(); // \Tzkt\Model\TokensGetTokensCountStandardParameter | Filter by token standard (`fa1.2` or `fa2`).   Click on the parameter to expand more details.
$token_metadata = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by metadata. Note, this parameter supports the following format: `token.metadata{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by, for example: `?token.metadata.symbol.in=kUSD,uUSD`.   Click on the parameter to expand more details.
$anyof = new \Tzkt\Model\\Tzkt\Model\BlocksGetAnyofParameter(); // \Tzkt\Model\BlocksGetAnyofParameter | Filter by any of the specified fields (`from` or `to`). Example: `anyof.from.to=tz1...` will return transfers where `from` OR `to` is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details.
$from = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by sender account address.   Click on the parameter to expand more details.
$to = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by target account address.   Click on the parameter to expand more details.
$amount = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$transaction_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details.
$origination_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details.
$migration_id = new \Tzkt\Model\\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details.
$indexed_at = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter

try {
    $result = $apiInstance->tokensGetTokenTransfersCount($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensGetTokenTransfersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **token_id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. | [optional] |
| **token_contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **token_token_id** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_standard** | [**\Tzkt\Model\TokensGetTokensCountStandardParameter**](../Model/.md)| Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. | [optional] |
| **token_metadata** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. | [optional] |
| **anyof** | [**\Tzkt\Model\BlocksGetAnyofParameter**](../Model/.md)| Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. | [optional] |
| **from** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by sender account address.   Click on the parameter to expand more details. | [optional] |
| **to** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by target account address.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **transaction_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. | [optional] |
| **origination_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. | [optional] |
| **migration_id** | [**\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. | [optional] |
| **indexed_at** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)|  | [optional] |

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

## `tokensGetTokens()`

```php
tokensGetTokens($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select): \Tzkt\Model\Token[]
```

Get tokens

Returns a list of tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Note, this is not the same as `tokenId` nat value.   Click on the parameter to expand more details.
$contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$token_id = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by tokenId (for FA1.2 tokens tokenId is always `\"0\"`).   Click on the parameter to expand more details.
$standard = new \Tzkt\Model\\Tzkt\Model\TokensGetTokensCountStandardParameter(); // \Tzkt\Model\TokensGetTokensCountStandardParameter | Filter by token standard (`fa1.2` or `fa2`).   Click on the parameter to expand more details.
$first_minter = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by address of the first minter.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the token was first seen.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the token was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details.
$metadata = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by metadata.   Note, this parameter supports the following format: `metadata{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?metadata.symbol.in=kUSD,uUSD`).   Click on the parameter to expand more details.
$indexed_at = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->tokensGetTokens($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensGetTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. | [optional] |
| **contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **token_id** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. | [optional] |
| **standard** | [**\Tzkt\Model\TokensGetTokensCountStandardParameter**](../Model/.md)| Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. | [optional] |
| **first_minter** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by address of the first minter.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. | [optional] |
| **metadata** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. | [optional] |
| **indexed_at** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)|  | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\Token[]**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensGetTokensCount()`

```php
tokensGetTokensCount($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at): int
```

Get tokens count

Returns a total number of tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filter by internal TzKT id. Note, this is not the same as `tokenId` nat value.   Click on the parameter to expand more details.
$contract = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by contract address.   Click on the parameter to expand more details.
$token_id = new \Tzkt\Model\\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter | Filter by tokenId (for FA1.2 tokens tokenId is always `\"0\"`).   Click on the parameter to expand more details.
$standard = new \Tzkt\Model\\Tzkt\Model\TokensGetTokensCountStandardParameter(); // \Tzkt\Model\TokensGetTokensCountStandardParameter | Filter by token standard (`fa1.2` or `fa2`).   Click on the parameter to expand more details.
$first_minter = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filter by address of the first minter.   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the token was first seen.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the token was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details.
$metadata = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by metadata.   Note, this parameter supports the following format: `metadata{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?metadata.symbol.in=kUSD,uUSD`).   Click on the parameter to expand more details.
$indexed_at = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter

try {
    $result = $apiInstance->tokensGetTokensCount($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensGetTokensCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. | [optional] |
| **contract** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by contract address.   Click on the parameter to expand more details. | [optional] |
| **token_id** | [**\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. | [optional] |
| **standard** | [**\Tzkt\Model\TokensGetTokensCountStandardParameter**](../Model/.md)| Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. | [optional] |
| **first_minter** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filter by address of the first minter.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. | [optional] |
| **metadata** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. | [optional] |
| **indexed_at** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)|  | [optional] |

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
