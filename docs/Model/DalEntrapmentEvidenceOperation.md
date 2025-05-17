# # DalEntrapmentEvidenceOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;dal_entrapment_evidence&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**accuser** | [**\Tzkt\Model\DalEntrapmentEvidenceOperationAllOfAccuser**](DalEntrapmentEvidenceOperationAllOfAccuser.md) |  | [optional]
**offender** | [**\Tzkt\Model\DalEntrapmentEvidenceOperationAllOfOffender**](DalEntrapmentEvidenceOperationAllOfOffender.md) |  | [optional]
**trap_level** | **int** | Height of the block from the genesis, where the trap was attested | [optional]
**trap_slot_index** | **int** | Trap slot index | [optional]
**quote** | [**\Tzkt\Model\DalEntrapmentEvidenceOperationAllOfQuote**](DalEntrapmentEvidenceOperationAllOfQuote.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
