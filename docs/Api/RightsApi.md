# Tzkt\RightsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rightsGet()**](RightsApi.md#rightsGet) | **GET** /v1/rights | Get rights |
| [**rightsGetCount()**](RightsApi.md#rightsGetCount) | **GET** /v1/rights/count | Get rights count |


## `rightsGet()`

```php
rightsGet($type, $baker, $cycle, $level, $slots, $round, $priority, $status, $select, $sort, $offset, $limit): \Tzkt\Model\BakingRight[]
```

Get rights

Returns a list of rights.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \Tzkt\Model\\Tzkt\Model\RightsGetCountTypeParameter(); // \Tzkt\Model\RightsGetCountTypeParameter | Filters rights by type (`baking`, `endorsing`)
$baker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filters rights by baker
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters rights by cycle
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters rights by level
$slots = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter | Filters rights by slots
$round = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter | Filters rights by round
$priority = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter | [DEPRECATED]
$status = new \Tzkt\Model\\Tzkt\Model\RightsGetCountStatusParameter(); // \Tzkt\Model\RightsGetCountStatusParameter | Filters rights by status (`future`, `realized`, `missed`)
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts rights by specified field. Supported fields: `level` (default).
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->rightsGet($type, $baker, $cycle, $level, $slots, $round, $priority, $status, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightsApi->rightsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\Tzkt\Model\RightsGetCountTypeParameter**](../Model/.md)| Filters rights by type (&#x60;baking&#x60;, &#x60;endorsing&#x60;) | [optional] |
| **baker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filters rights by baker | [optional] |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters rights by cycle | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters rights by level | [optional] |
| **slots** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)| Filters rights by slots | [optional] |
| **round** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)| Filters rights by round | [optional] |
| **priority** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)| [DEPRECATED] | [optional] |
| **status** | [**\Tzkt\Model\RightsGetCountStatusParameter**](../Model/.md)| Filters rights by status (&#x60;future&#x60;, &#x60;realized&#x60;, &#x60;missed&#x60;) | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts rights by specified field. Supported fields: &#x60;level&#x60; (default). | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\BakingRight[]**](../Model/BakingRight.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rightsGetCount()`

```php
rightsGetCount($type, $baker, $cycle, $level, $slots, $round, $priority, $status): int
```

Get rights count

Returns the total number of stored rights.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\RightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \Tzkt\Model\\Tzkt\Model\RightsGetCountTypeParameter(); // \Tzkt\Model\RightsGetCountTypeParameter | Filters rights by type (`baking`, `endorsing`)
$baker = new \Tzkt\Model\\Tzkt\Model\AccountsGetDelegateParameter(); // \Tzkt\Model\AccountsGetDelegateParameter | Filters rights by baker
$cycle = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters rights by cycle
$level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters rights by level
$slots = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter | Filters rights by slots
$round = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter | Filters rights by round
$priority = new \Tzkt\Model\\Tzkt\Model\CommitmentsGetAllActivationLevelParameter(); // \Tzkt\Model\CommitmentsGetAllActivationLevelParameter | [DEPRECATED]
$status = new \Tzkt\Model\\Tzkt\Model\RightsGetCountStatusParameter(); // \Tzkt\Model\RightsGetCountStatusParameter | Filters rights by status (`future`, `realized`, `missed`)

try {
    $result = $apiInstance->rightsGetCount($type, $baker, $cycle, $level, $slots, $round, $priority, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightsApi->rightsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\Tzkt\Model\RightsGetCountTypeParameter**](../Model/.md)| Filters rights by type (&#x60;baking&#x60;, &#x60;endorsing&#x60;) | [optional] |
| **baker** | [**\Tzkt\Model\AccountsGetDelegateParameter**](../Model/.md)| Filters rights by baker | [optional] |
| **cycle** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters rights by cycle | [optional] |
| **level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters rights by level | [optional] |
| **slots** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)| Filters rights by slots | [optional] |
| **round** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)| Filters rights by round | [optional] |
| **priority** | [**\Tzkt\Model\CommitmentsGetAllActivationLevelParameter**](../Model/.md)| [DEPRECATED] | [optional] |
| **status** | [**\Tzkt\Model\RightsGetCountStatusParameter**](../Model/.md)| Filters rights by status (&#x60;future&#x60;, &#x60;realized&#x60;, &#x60;missed&#x60;) | [optional] |

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
