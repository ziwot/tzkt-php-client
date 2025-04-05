# Tzkt\DomainsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsGet()**](DomainsApi.md#domainsGet) | **GET** /v1/domains | Get domains |
| [**domainsGetByName()**](DomainsApi.md#domainsGetByName) | **GET** /v1/domains/{name} | Get domain by name |
| [**domainsGetCount()**](DomainsApi.md#domainsGetCount) | **GET** /v1/domains/count | Get domains count |


## `domainsGet()`

```php
domainsGet($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Tzkt\Model\Domain[]
```

Get domains

Returns a list of domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by the domain level.   Click on the parameter to expand more details.
$name = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // \Tzkt\Model\AccountsGetOperationsEntrypointParameter | Filter by the domain name.   Click on the parameter to expand more details.
$owner = new \Tzkt\Model\\Tzkt\Model\DomainsGetCountOwnerParameter(); // \Tzkt\Model\DomainsGetCountOwnerParameter | Filter by the domain owner.   Click on the parameter to expand more details.
$address = new \Tzkt\Model\\Tzkt\Model\DomainsGetCountOwnerParameter(); // \Tzkt\Model\DomainsGetCountOwnerParameter | Filter by the address the domain points to.   Click on the parameter to expand more details.
$reverse = new \Tzkt\Model\\Tzkt\Model\AccountsGetStakedParameter(); // \Tzkt\Model\AccountsGetStakedParameter | Filter by the 'reverse' flag.   Click on the parameter to expand more details.
$expiration = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // \Tzkt\Model\AccountsGetOperationsTimestampParameter | Filter by the domain expiration.   Click on the parameter to expand more details.
$data = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by the domain data.   Note, this parameter supports the following format: `data{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?data.foo=bar`).   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->domainsGet($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by the domain level.   Click on the parameter to expand more details. | [optional] |
| **name** | [**\Tzkt\Model\AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filter by the domain name.   Click on the parameter to expand more details. | [optional] |
| **owner** | [**\Tzkt\Model\DomainsGetCountOwnerParameter**](../Model/.md)| Filter by the domain owner.   Click on the parameter to expand more details. | [optional] |
| **address** | [**\Tzkt\Model\DomainsGetCountOwnerParameter**](../Model/.md)| Filter by the address the domain points to.   Click on the parameter to expand more details. | [optional] |
| **reverse** | [**\Tzkt\Model\AccountsGetStakedParameter**](../Model/.md)| Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. | [optional] |
| **expiration** | [**\Tzkt\Model\AccountsGetOperationsTimestampParameter**](../Model/.md)| Filter by the domain expiration.   Click on the parameter to expand more details. | [optional] |
| **data** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Tzkt\Model\Domain[]**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsGetByName()`

```php
domainsGetByName($name): \Tzkt\Model\Domain
```

Get domain by name

Returns the domain with the specified name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Domain name

try {
    $result = $apiInstance->domainsGetByName($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGetByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Domain name | |

### Return type

[**\Tzkt\Model\Domain**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsGetCount()`

```php
domainsGetCount($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time): int
```

Get domains count

Returns the total number of domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by the domain level.   Click on the parameter to expand more details.
$name = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // \Tzkt\Model\AccountsGetOperationsEntrypointParameter | Filter by the domain name.   Click on the parameter to expand more details.
$owner = new \Tzkt\Model\\Tzkt\Model\DomainsGetCountOwnerParameter(); // \Tzkt\Model\DomainsGetCountOwnerParameter | Filter by the domain owner.   Click on the parameter to expand more details.
$address = new \Tzkt\Model\\Tzkt\Model\DomainsGetCountOwnerParameter(); // \Tzkt\Model\DomainsGetCountOwnerParameter | Filter by the address the domain points to.   Click on the parameter to expand more details.
$reverse = new \Tzkt\Model\\Tzkt\Model\AccountsGetStakedParameter(); // \Tzkt\Model\AccountsGetStakedParameter | Filter by the 'reverse' flag.   Click on the parameter to expand more details.
$expiration = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // \Tzkt\Model\AccountsGetOperationsTimestampParameter | Filter by the domain expiration.   Click on the parameter to expand more details.
$data = new \Tzkt\Model\\Tzkt\Model\AccountsGetOperationsParameterParameter(); // \Tzkt\Model\AccountsGetOperationsParameterParameter | Filter by the domain data.   Note, this parameter supports the following format: `data{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?data.foo=bar`).   Click on the parameter to expand more details.
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details.
$first_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details.
$last_time = new \Tzkt\Model\\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->domainsGetCount($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by the domain level.   Click on the parameter to expand more details. | [optional] |
| **name** | [**\Tzkt\Model\AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filter by the domain name.   Click on the parameter to expand more details. | [optional] |
| **owner** | [**\Tzkt\Model\DomainsGetCountOwnerParameter**](../Model/.md)| Filter by the domain owner.   Click on the parameter to expand more details. | [optional] |
| **address** | [**\Tzkt\Model\DomainsGetCountOwnerParameter**](../Model/.md)| Filter by the address the domain points to.   Click on the parameter to expand more details. | [optional] |
| **reverse** | [**\Tzkt\Model\AccountsGetStakedParameter**](../Model/.md)| Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. | [optional] |
| **expiration** | [**\Tzkt\Model\AccountsGetOperationsTimestampParameter**](../Model/.md)| Filter by the domain expiration.   Click on the parameter to expand more details. | [optional] |
| **data** | [**\Tzkt\Model\AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. | [optional] |

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
