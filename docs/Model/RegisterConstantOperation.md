# # RegisterConstantOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;register_constant&#x60; - is used to register a global constant - Micheline expression that can be reused by multiple smart contracts | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**sender** | [**\Tzkt\Model\RegisterConstantOperationAllOfSender**](RegisterConstantOperationAllOfSender.md) |  | [optional]
**counter** | **int** | An account nonce which is used to prevent operation replay | [optional]
**gas_limit** | **int** | A cap on the amount of gas a given operation can consume | [optional]
**gas_used** | **int** | Amount of gas, consumed by the operation | [optional]
**storage_limit** | **int** | A cap on the amount of storage a given operation can consume | [optional]
**storage_used** | **int** | Amount of storage, consumed by the operation | [optional]
**baker_fee** | **int** | Fee to the baker, produced block, in which the operation was included (micro tez) | [optional]
**storage_fee** | **int** | The amount of funds burned from the sender account for used the blockchain storage (micro tez) | [optional]
**status** | **string** | Operation status (&#x60;applied&#x60; - an operation applied by the node and successfully added to the blockchain, &#x60;failed&#x60; - an operation which failed with some particular error (not enough balance, gas limit, etc), &#x60;backtracked&#x60; - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, &#x60;skipped&#x60; - all operations after the failed one in an operation group) | [optional]
**address** | **string** | Global address of the registered constant (null if the operation failed) | [optional]
**value** | **mixed** | Constant value. Note: you can configure code format by setting &#x60;micheline&#x60; query parameter (&#x60;0 | 2&#x60; - raw micheline, &#x60;1 | 3&#x60; - raw micheline string). | [optional]
**errors** | [**\Tzkt\Model\OperationError[]**](OperationError.md) | List of errors provided by the node, injected the operation to the blockchain. &#x60;null&#x60; if there is no errors | [optional]
**quote** | [**\Tzkt\Model\RegisterConstantOperationAllOfQuote**](RegisterConstantOperationAllOfQuote.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
