# # EpochStatusParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;123&#x60; is the same as &#x60;param&#x3D;123&#x60;). \\ Specify an epoch status to get items where the specified field is equal to the specified value.  Example: &#x60;?status&#x3D;completed&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify an epoch status to get items where the specified field is not equal to the specified value.  Example: &#x60;?status.ne&#x3D;no_proposals&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of epoch statuses to get items where the specified field is equal to one of the specified values.  Example: &#x60;?status.in&#x3D;completed,failed&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of epoch statuses to get items where the specified field is not equal to all the specified values.  Example: &#x60;?status.ni&#x3D;completed,failed&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
