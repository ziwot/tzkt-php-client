# Tzkt\SoftwareApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**softwareGet()**](SoftwareApi.md#softwareGet) | **GET** /v1/software | Get baker software |
| [**softwareGetCount()**](SoftwareApi.md#softwareGetCount) | **GET** /v1/software/count | Get software count |


## `softwareGet()`

```php
softwareGet($select, $sort, $offset, $limit): \Tzkt\Model\Software[]
```

Get baker software

Returns a list of baker software.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `firstLevel`, `lastLevel`, `blocksCount`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->softwareGet($select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->softwareGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;blocksCount&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\Software[]**](../Model/Software.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `softwareGetCount()`

```php
softwareGetCount(): int
```

Get software count

Returns a number of software.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->softwareGetCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->softwareGetCount: ', $e->getMessage(), PHP_EOL;
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
