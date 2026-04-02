# # PreattestationOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;preattestation&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**delegate** | [**\Tzkt\Model\PreattestationOperationAllOfDelegate**](PreattestationOperationAllOfDelegate.md) |  | [optional]
**power** | **int** | Attestation power | [optional]
**quote** | [**\Tzkt\Model\PreattestationOperationAllOfQuote**](PreattestationOperationAllOfQuote.md) |  | [optional]
**slots** | **int** | **DEPRECATED** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
