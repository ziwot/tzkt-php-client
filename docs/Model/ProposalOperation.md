# # ProposalOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;proposal&#x60; - is used by bakers (delegates) to submit and/or upvote proposals to amend the protocol | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**period** | [**\Tzkt\Model\ProposalOperationAllOfPeriod**](ProposalOperationAllOfPeriod.md) |  | [optional]
**proposal** | [**\Tzkt\Model\ProposalOperationAllOfProposal**](ProposalOperationAllOfProposal.md) |  | [optional]
**delegate** | [**\Tzkt\Model\ProposalOperationAllOfDelegate**](ProposalOperationAllOfDelegate.md) |  | [optional]
**voting_power** | **int** | Baker&#39;s voting power | [optional]
**duplicated** | **bool** | Indicates whether proposal upvote has already been pushed. Duplicated proposal operations are not counted when selecting proposal-winner. | [optional]
**quote** | [**\Tzkt\Model\ProposalOperationAllOfQuote**](ProposalOperationAllOfQuote.md) |  | [optional]
**rolls** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
