# # PreendorsementOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;preendorsement&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**delegate** | [**\Tzkt\Model\PreendorsementOperationAllOfDelegate**](PreendorsementOperationAllOfDelegate.md) |  | [optional]
**slots** | **int** | Number of assigned endorsement slots to the baker who sent the operation | [optional]
**quote** | [**\Tzkt\Model\PreendorsementOperationAllOfQuote**](PreendorsementOperationAllOfQuote.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
