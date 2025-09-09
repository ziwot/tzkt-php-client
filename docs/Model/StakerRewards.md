# # StakerRewards

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cycle** | **int** | Cycle in which the rewards were earned.   **[sortable]** | [optional]
**baker** | [**\Tzkt\Model\StakerRewardsBaker**](StakerRewardsBaker.md) |  | [optional]
**initial_stake** | **int** | Staked balance at the beginning of the cycle (micro tez). | [optional]
**added_stake** | **int** | Amount added (staked) during the cycle (micro tez). | [optional]
**removed_stake** | **int** | Amount removed (unstaked) during the cycle (micro tez). | [optional]
**final_stake** | **int** | Staked balance at the end of the cycle (micro tez). | [optional]
**avg_stake** | **int** | Average (per-block) staked balance (micro tez). | [optional]
**rewards** | **int** | Staking rewards (or losses if negative) earned during the cycle (micro tez). | [optional]
**baker_rewards** | [**\Tzkt\Model\StakerRewardsBakerRewards**](StakerRewardsBakerRewards.md) |  | [optional]
**quote** | [**\Tzkt\Model\CycleQuote**](CycleQuote.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
