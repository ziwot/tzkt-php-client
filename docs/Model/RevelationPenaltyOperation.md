# # RevelationPenaltyOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;revelation_penalty&#x60; - is operation, in which rewards were lost due to unrevealed seed nonces by the delegate (synthetic type) | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**baker** | [**\Tzkt\Model\RevelationPenaltyOperationAllOfBaker**](RevelationPenaltyOperationAllOfBaker.md) |  | [optional]
**missed_level** | **int** | Height of the block, which contains hash of the seed nonce, which was to be revealed | [optional]
**loss** | **int** | Reward for baking and gathered fees from the block, which were lost due to unrevealed seed nonces (micro tez) | [optional]
**quote** | [**\Tzkt\Model\RevelationPenaltyOperationAllOfQuote**](RevelationPenaltyOperationAllOfQuote.md) |  | [optional]
**lost_reward** | **int** | [DEPRECATED] | [optional]
**lost_fees** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
