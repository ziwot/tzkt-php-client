# # SmartRollupPublishOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;sr_publish&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database   **[sortable]** | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**hash** | **string** | Hash of the operation | [optional]
**sender** | [**\Tzkt\Model\SmartRollupPublishOperationAllOfSender**](SmartRollupPublishOperationAllOfSender.md) |  | [optional]
**counter** | **int** | An account nonce which is used to prevent operation replay | [optional]
**gas_limit** | **int** | A cap on the amount of gas a given operation can consume | [optional]
**gas_used** | **int** | Amount of gas, consumed by the operation | [optional]
**storage_limit** | **int** | A cap on the amount of storage a given operation can consume | [optional]
**baker_fee** | **int** | Fee to the baker, produced block, in which the operation was included (micro tez) | [optional]
**status** | **string** | Operation status (&#x60;applied&#x60; - an operation applied by the node and successfully added to the blockchain, &#x60;failed&#x60; - an operation which failed with some particular error (not enough balance, gas limit, etc), &#x60;backtracked&#x60; - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, &#x60;skipped&#x60; - all operations after the failed one in an operation group) | [optional]
**rollup** | [**\Tzkt\Model\SmartRollupPublishOperationAllOfRollup**](SmartRollupPublishOperationAllOfRollup.md) |  | [optional]
**commitment** | [**\Tzkt\Model\SmartRollupPublishOperationAllOfCommitment**](SmartRollupPublishOperationAllOfCommitment.md) |  | [optional]
**bond** | **int** | Amount of bonds locked (micro tez) | [optional]
**errors** | [**\Tzkt\Model\OperationError[]**](OperationError.md) | List of errors provided by the node, injected the operation to the blockchain. &#x60;null&#x60; if there is no errors | [optional]
**quote** | [**\Tzkt\Model\SmartRollupPublishOperationAllOfQuote**](SmartRollupPublishOperationAllOfQuote.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
