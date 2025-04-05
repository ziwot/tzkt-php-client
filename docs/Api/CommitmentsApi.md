# Tzkt\CommitmentsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commitmentsGet()**](CommitmentsApi.md#commitmentsGet) | **GET** /v1/commitments/{address} | Get commitment by blinded address |
| [**commitmentsGetAll()**](CommitmentsApi.md#commitmentsGetAll) | **GET** /v1/commitments | Get commitments |
| [**commitmentsGetCount()**](CommitmentsApi.md#commitmentsGetCount) | **GET** /v1/commitments/count | Get commitments count |


## `commitmentsGet()`

```php
commitmentsGet($address): \Tzkt\Model\Commitment
```

Get commitment by blinded address

Returns a commitment with the specified blinded address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\CommitmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Blinded address (starting with btz)

try {
    $result = $apiInstance->commitmentsGet($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommitmentsApi->commitmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Blinded address (starting with btz) | |

### Return type

[**\Tzkt\Model\Commitment**](../Model/Commitment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commitmentsGetAll()`

```php
commitmentsGetAll($activated, $activation_level, $balance, $select, $sort, $offset, $limit): \Tzkt\Model\Commitment[]
```

Get commitments

Returns a list of commitments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\CommitmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$activated = True; // bool | Filters commitments by activation status
$activation_level = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter | Filters commitments by activation level
$balance = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filters commitments by activated balance
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `balance`, `activationLevel`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->commitmentsGetAll($activated, $activation_level, $balance, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommitmentsApi->commitmentsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activated** | **bool**| Filters commitments by activation status | [optional] |
| **activation_level** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)| Filters commitments by activation level | [optional] |
| **balance** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filters commitments by activated balance | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;activationLevel&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\Commitment[]**](../Model/Commitment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commitmentsGetCount()`

```php
commitmentsGetCount($activated, $balance): int
```

Get commitments count

Returns a number of commitments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\CommitmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$activated = True; // bool | Filters commitments by activation status
$balance = new \Tzkt\Model\\Tzkt\Model\AccountsGetBalanceParameter(); // \Tzkt\Model\AccountsGetBalanceParameter | Filters commitments by activated balance

try {
    $result = $apiInstance->commitmentsGetCount($activated, $balance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommitmentsApi->commitmentsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activated** | **bool**| Filters commitments by activation status | [optional] |
| **balance** | [**\Tzkt\Model\AccountsGetBalanceParameter**](../Model/.md)| Filters commitments by activated balance | [optional] |

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
