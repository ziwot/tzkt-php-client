# Tzkt\VotingApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**votingGetCurrentEpoch()**](VotingApi.md#votingGetCurrentEpoch) | **GET** /v1/voting/epochs/current | Get current voting epoch |
| [**votingGetCurrentPeriod()**](VotingApi.md#votingGetCurrentPeriod) | **GET** /v1/voting/periods/current | Get current voting period |
| [**votingGetEpoch()**](VotingApi.md#votingGetEpoch) | **GET** /v1/voting/epochs/{index} | Get voting epoch by index |
| [**votingGetEpochs()**](VotingApi.md#votingGetEpochs) | **GET** /v1/voting/epochs | Get voting epochs |
| [**votingGetLatestVoting()**](VotingApi.md#votingGetLatestVoting) | **GET** /v1/voting/epochs/latest_voting | Get latest voting |
| [**votingGetPeriod()**](VotingApi.md#votingGetPeriod) | **GET** /v1/voting/periods/{index} | Get voting period by index |
| [**votingGetPeriodVoter()**](VotingApi.md#votingGetPeriodVoter) | **GET** /v1/voting/periods/{index}/voters/{address} | Get period voter |
| [**votingGetPeriodVoter2()**](VotingApi.md#votingGetPeriodVoter2) | **GET** /v1/voting/periods/current/voters/{address} | Get current period voter |
| [**votingGetPeriodVoters()**](VotingApi.md#votingGetPeriodVoters) | **GET** /v1/voting/periods/{index}/voters | Get period voters |
| [**votingGetPeriodVoters2()**](VotingApi.md#votingGetPeriodVoters2) | **GET** /v1/voting/periods/current/voters | Get current period voters |
| [**votingGetPeriods()**](VotingApi.md#votingGetPeriods) | **GET** /v1/voting/periods | Get voting periods |
| [**votingGetProposalByHash()**](VotingApi.md#votingGetProposalByHash) | **GET** /v1/voting/proposals/{hash} | Get proposal by hash |
| [**votingGetProposals()**](VotingApi.md#votingGetProposals) | **GET** /v1/voting/proposals | Get proposals |
| [**votingGetProposalsCount()**](VotingApi.md#votingGetProposalsCount) | **GET** /v1/voting/proposals/count | Get proposals count |


## `votingGetCurrentEpoch()`

```php
votingGetCurrentEpoch(): \Tzkt\Model\VotingEpoch
```

Get current voting epoch

Returns the current voting epoch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->votingGetCurrentEpoch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetCurrentEpoch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tzkt\Model\VotingEpoch**](../Model/VotingEpoch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetCurrentPeriod()`

```php
votingGetCurrentPeriod(): \Tzkt\Model\VotingPeriod
```

Get current voting period

Returns current voting period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->votingGetCurrentPeriod();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetCurrentPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tzkt\Model\VotingPeriod**](../Model/VotingPeriod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetEpoch()`

```php
votingGetEpoch($index): \Tzkt\Model\VotingEpoch
```

Get voting epoch by index

Returns a voting epoch at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Voting epoch index starting from zero

try {
    $result = $apiInstance->votingGetEpoch($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetEpoch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **int**| Voting epoch index starting from zero | |

### Return type

[**\Tzkt\Model\VotingEpoch**](../Model/VotingEpoch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetEpochs()`

```php
votingGetEpochs($status, $sort, $offset, $limit): \Tzkt\Model\VotingEpoch[]
```

Get voting epochs

Returns a list of voting epochs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \Tzkt\Model\\Tzkt\Model\VotingGetEpochsStatusParameter(); // \Tzkt\Model\VotingGetEpochsStatusParameter | Filter by voting epoch status (`no_proposals`, `voting`, `completed`, `failed`).
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts voting epochs by specified field. Supported fields: `index` (default).
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetEpochs($status, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetEpochs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\Tzkt\Model\VotingGetEpochsStatusParameter**](../Model/.md)| Filter by voting epoch status (&#x60;no_proposals&#x60;, &#x60;voting&#x60;, &#x60;completed&#x60;, &#x60;failed&#x60;). | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts voting epochs by specified field. Supported fields: &#x60;index&#x60; (default). | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\VotingEpoch[]**](../Model/VotingEpoch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetLatestVoting()`

```php
votingGetLatestVoting(): \Tzkt\Model\VotingEpoch
```

Get latest voting

Returns the latest epoch with at least one proposal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->votingGetLatestVoting();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetLatestVoting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tzkt\Model\VotingEpoch**](../Model/VotingEpoch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriod()`

```php
votingGetPeriod($index): \Tzkt\Model\VotingPeriod
```

Get voting period by index

Returns a voting period at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Voting period index starting from zero

try {
    $result = $apiInstance->votingGetPeriod($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **int**| Voting period index starting from zero | |

### Return type

[**\Tzkt\Model\VotingPeriod**](../Model/VotingPeriod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriodVoter()`

```php
votingGetPeriodVoter($index, $address): \Tzkt\Model\VoterSnapshot
```

Get period voter

Returns a voter with the specified address from the voting period at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Voting period index starting from zero
$address = 'address_example'; // string | Voter address

try {
    $result = $apiInstance->votingGetPeriodVoter($index, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriodVoter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **int**| Voting period index starting from zero | |
| **address** | **string**| Voter address | |

### Return type

[**\Tzkt\Model\VoterSnapshot**](../Model/VoterSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriodVoter2()`

```php
votingGetPeriodVoter2($address): \Tzkt\Model\VoterSnapshot
```

Get current period voter

Returns a voter with the specified address from the current period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Voter address

try {
    $result = $apiInstance->votingGetPeriodVoter2($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriodVoter2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Voter address | |

### Return type

[**\Tzkt\Model\VoterSnapshot**](../Model/VoterSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriodVoters()`

```php
votingGetPeriodVoters($index, $status, $sort, $offset, $limit): \Tzkt\Model\VoterSnapshot[]
```

Get period voters

Returns voters from the voting period at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Voting period index starting from zero
$status = new \Tzkt\Model\\Tzkt\Model\VotingGetPeriodVotersStatusParameter(); // \Tzkt\Model\VotingGetPeriodVotersStatusParameter | Filters voters by status (`none`, `upvoted`, `voted_yay`, `voted_nay`, `voted_pass`)
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts voters by specified field. Supported fields: `id` (default), `votingPower`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetPeriodVoters($index, $status, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriodVoters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **int**| Voting period index starting from zero | |
| **status** | [**\Tzkt\Model\VotingGetPeriodVotersStatusParameter**](../Model/.md)| Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\VoterSnapshot[]**](../Model/VoterSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriodVoters2()`

```php
votingGetPeriodVoters2($status, $sort, $offset, $limit): \Tzkt\Model\VoterSnapshot[]
```

Get current period voters

Returns voters from the current period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \Tzkt\Model\\Tzkt\Model\VotingGetPeriodVotersStatusParameter(); // \Tzkt\Model\VotingGetPeriodVotersStatusParameter | Filters voters by status (`none`, `upvoted`, `voted_yay`, `voted_nay`, `voted_pass`)
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts voters by specified field. Supported fields: `id` (default), `votingPower`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetPeriodVoters2($status, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriodVoters2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\Tzkt\Model\VotingGetPeriodVotersStatusParameter**](../Model/.md)| Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\VoterSnapshot[]**](../Model/VoterSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriods()`

```php
votingGetPeriods($first_level, $last_level, $epoch, $select, $sort, $offset, $limit): \Tzkt\Model\VotingPeriod[]
```

Get voting periods

Returns a list of voting periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the first block of the period.
$last_level = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filter by level of the last block of the period.
$epoch = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters by voting epoch
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts voting periods by specified field. Supported fields: `id` (default).
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetPeriods($first_level, $last_level, $epoch, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **first_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the first block of the period. | [optional] |
| **last_level** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filter by level of the last block of the period. | [optional] |
| **epoch** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters by voting epoch | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts voting periods by specified field. Supported fields: &#x60;id&#x60; (default). | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\VotingPeriod[]**](../Model/VotingPeriod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetProposalByHash()`

```php
votingGetProposalByHash($hash): \Tzkt\Model\Proposal
```

Get proposal by hash

Returns the most recent protocol proposal with the specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Proposal hash

try {
    $result = $apiInstance->votingGetProposalByHash($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetProposalByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Proposal hash | |

### Return type

[**\Tzkt\Model\Proposal**](../Model/Proposal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetProposals()`

```php
votingGetProposals($hash, $epoch, $select, $sort, $offset, $limit): \Tzkt\Model\Proposal[]
```

Get proposals

Returns a list of protocol proposals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = new \Tzkt\Model\\Tzkt\Model\OperationsGetBallotsProposalParameter(); // \Tzkt\Model\OperationsGetBallotsProposalParameter | Filters proposals by hash
$epoch = new \Tzkt\Model\\Tzkt\Model\AccountsGetIdParameter(); // \Tzkt\Model\AccountsGetIdParameter | Filters proposals by voting epoch
$select = new \Tzkt\Model\\Tzkt\Model\AccountsGetSelectParameter(); // \Tzkt\Model\AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Tzkt\Model\\Tzkt\Model\AccountsGetSortParameter(); // \Tzkt\Model\AccountsGetSortParameter | Sorts proposals by specified field. Supported fields: `id` (default), `upvotes`, `votingPower`.
$offset = new \Tzkt\Model\\Tzkt\Model\AccountsGetOffsetParameter(); // \Tzkt\Model\AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetProposals($hash, $epoch, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetProposals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | [**\Tzkt\Model\OperationsGetBallotsProposalParameter**](../Model/.md)| Filters proposals by hash | [optional] |
| **epoch** | [**\Tzkt\Model\AccountsGetIdParameter**](../Model/.md)| Filters proposals by voting epoch | [optional] |
| **select** | [**\Tzkt\Model\AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**\Tzkt\Model\AccountsGetSortParameter**](../Model/.md)| Sorts proposals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;upvotes&#x60;, &#x60;votingPower&#x60;. | [optional] |
| **offset** | [**\Tzkt\Model\AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Tzkt\Model\Proposal[]**](../Model/Proposal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetProposalsCount()`

```php
votingGetProposalsCount(): int
```

Get proposals count

Returns the total number of protocol proposals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->votingGetProposalsCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetProposalsCount: ', $e->getMessage(), PHP_EOL;
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
