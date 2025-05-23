# # BigIntegerNullableParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;123&#x60; is the same as &#x60;param&#x3D;123&#x60;). \\ Specify an integer number to get items where the specified field is equal to the specified value.  Example: &#x60;?balance&#x3D;1234&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify an integer number to get items where the specified field is not equal to the specified value.  Example: &#x60;?balance.ne&#x3D;1234&#x60;. | [optional]
**gt** | **string** | **Greater than** filter mode. \\ Specify an integer number to get items where the specified field is greater than the specified value.  Example: &#x60;?balance.gt&#x3D;1234&#x60;. | [optional]
**ge** | **string** | **Greater or equal** filter mode. \\ Specify an integer number to get items where the specified field is greater than equal to the specified value.  Example: &#x60;?balance.ge&#x3D;1234&#x60;. | [optional]
**lt** | **string** | **Less than** filter mode. \\ Specify an integer number to get items where the specified field is less than the specified value.  Example: &#x60;?balance.lt&#x3D;1234&#x60;. | [optional]
**le** | **string** | **Less or equal** filter mode. \\ Specify an integer number to get items where the specified field is less than or equal to the specified value.  Example: &#x60;?balance.le&#x3D;1234&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of integers to get items where the specified field is equal to one of the specified values.  Example: &#x60;?level.in&#x3D;12,14,52,69&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of integers to get items where the specified field is not equal to all the specified values.  Example: &#x60;?level.ni&#x3D;12,14,52,69&#x60;. | [optional]
**null** | **bool** | **Is null** filter mode. \\ Use this mode to get items where the specified field is null or not.  Example: &#x60;?nonce.null&#x60; or &#x60;?nonce.null&#x3D;false&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
