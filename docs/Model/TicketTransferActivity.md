# # TicketTransferActivity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Activity type | [optional]
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**level** | **int** | Level of the block, at which the transfer was made.   **[sortable]** | [optional]
**timestamp** | **\DateTime** | Timestamp of the block, at which the transfer was made. | [optional]
**ticket** | [**\Tzkt\Model\TicketTransferActivityAllOfTicket**](TicketTransferActivityAllOfTicket.md) |  | [optional]
**from** | [**\Tzkt\Model\TicketTransferActivityAllOfFrom**](TicketTransferActivityAllOfFrom.md) |  | [optional]
**to** | [**\Tzkt\Model\TicketTransferActivityAllOfTo**](TicketTransferActivityAllOfTo.md) |  | [optional]
**amount** | **string** | Amount of tickets transferred.   **[sortable]** | [optional]
**transaction_id** | **int** | Internal TzKT id of the transaction operation, caused the ticket transfer. | [optional]
**transfer_ticket_id** | **int** | Internal TzKT id of the transfer_ticket operation, caused the ticket transfer. | [optional]
**smart_rollup_execute_id** | **int** | Internal TzKT id of the smart_rollup_execute operation, caused the ticket transfer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
