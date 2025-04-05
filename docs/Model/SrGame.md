# # SrGame

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**rollup** | [**\Tzkt\Model\SrGameRollup**](SrGameRollup.md) |  | [optional]
**initiator** | [**\Tzkt\Model\SrGameInfoInitiator**](SrGameInfoInitiator.md) |  | [optional]
**initiator_commitment** | [**\Tzkt\Model\SrGameInfoInitiatorCommitment**](SrGameInfoInitiatorCommitment.md) |  | [optional]
**opponent** | [**\Tzkt\Model\SrGameInfoOpponent**](SrGameInfoOpponent.md) |  | [optional]
**opponent_commitment** | [**\Tzkt\Model\SrGameInfoOpponentCommitment**](SrGameInfoOpponentCommitment.md) |  | [optional]
**last_move** | [**\Tzkt\Model\SrGameLastMove**](SrGameLastMove.md) |  | [optional]
**first_level** | **int** | Level of the block where the refutation game was started.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the refutation game was started. | [optional]
**last_level** | **int** | Level of the block where the refutation game was last updated.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the refutation game was last updated. | [optional]
**initiator_reward** | **int** | In case the initiator won, this field will contain the reward amount (in mutez). | [optional]
**initiator_loss** | **int** | In case the initiator lost (including a &#x60;draw&#x60;), this field will contain the loss amount (in mutez). | [optional]
**opponent_reward** | **int** | In case the opponent won, this field will contain the reward amount (in mutez). | [optional]
**opponent_loss** | **int** | In case the opponent lost (including a &#x60;draw&#x60;), this field will contain the loss amount (in mutez). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
