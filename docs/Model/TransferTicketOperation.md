# # TransferTicketOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;transfer_ticket&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**sender** | [**\Tzkt\Model\TransferTicketOperationAllOfSender**](TransferTicketOperationAllOfSender.md) |  | [optional]
**counter** | **int** | An account nonce which is used to prevent operation replay | [optional]
**gas_limit** | **int** | A cap on the amount of gas a given operation can consume | [optional]
**gas_used** | **int** | Amount of gas, consumed by the operation | [optional]
**storage_limit** | **int** | A cap on the amount of storage a given operation can consume | [optional]
**storage_used** | **int** | Amount of storage, consumed by the operation | [optional]
**baker_fee** | **int** | Fee to the baker, produced block, in which the operation was included (micro tez) | [optional]
**storage_fee** | **int** | The amount of funds burned from the sender account for used the blockchain storage (micro tez) | [optional]
**target** | [**\Tzkt\Model\TransferTicketOperationAllOfTarget**](TransferTicketOperationAllOfTarget.md) |  | [optional]
**ticketer** | [**\Tzkt\Model\TransferTicketOperationAllOfTicketer**](TransferTicketOperationAllOfTicketer.md) |  | [optional]
**amount** | **string** | Amount sent | [optional]
**entrypoint** | **string** | Entrypoint | [optional]
**ticket_transfers_count** | **int** | Number of ticket transfers produced by the operation, or &#x60;null&#x60; if there are no transfers | [optional]
**content_type** | **mixed** | Micheline type of the content | [optional]
**content** | **mixed** | Ticket content | [optional]
**status** | **string** | Operation status (&#x60;applied&#x60; - an operation applied by the node and successfully added to the blockchain, &#x60;failed&#x60; - an operation which failed with some particular error (not enough balance, gas limit, etc), &#x60;backtracked&#x60; - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, &#x60;skipped&#x60; - all operations after the failed one in an operation group) | [optional]
**errors** | [**\Tzkt\Model\OperationError[]**](OperationError.md) | List of errors provided by the node, injected the operation to the blockchain. &#x60;null&#x60; if there is no errors | [optional]
**quote** | [**\Tzkt\Model\TransferTicketOperationAllOfQuote**](TransferTicketOperationAllOfQuote.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
