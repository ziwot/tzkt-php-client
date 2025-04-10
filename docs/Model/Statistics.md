# # Statistics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cycle** | **int** | Cycle at the end of which the statistics has been calculated. This field is only present in cyclic statistics. | [optional]
**date** | **\DateTime** | Day at the end of which the statistics has been calculated. This field is only present in daily statistics. | [optional]
**level** | **int** | Level of the block at which the statistics has been calculated | [optional]
**timestamp** | **\DateTime** | Timestamp of the block at which the statistics has been calculated (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**total_supply** | **int** | Total supply - all existing tokens (including locked vested funds and frozen funds) plus not yet activated fundraiser tokens | [optional]
**circulating_supply** | **int** | Circulating supply - all active tokens which can affect supply and demand (can be spent/transferred) | [optional]
**total_bootstrapped** | **int** | Total amount of tokens initially created when starting the blockchain | [optional]
**total_commitments** | **int** | Total commitment amount (tokens to be activated by fundraisers) | [optional]
**total_activated** | **int** | Total amount of tokens activated by fundraisers | [optional]
**total_created** | **int** | Total amount of created/issued tokens | [optional]
**total_burned** | **int** | Total amount of burned tokens | [optional]
**total_banished** | **int** | Total amount of tokens sent to the null-address, which is equivalent to burning | [optional]
**total_frozen** | **int** | Total amount of frozen tokens (frozen security deposits, frozen rewards and frozen fees) | [optional]
**total_rollup_bonds** | **int** | Total amount of tokens locked as rollup bonds | [optional]
**total_smart_rollup_bonds** | **int** | Total amount of tokens locked as smart rollup bonds | [optional]
**total_lost** | **int** | Total amount lost due to inaccuracy of the economic protocol introduced in Oxford. This amount is literally lost, because it is no longer available for the account in any mean, but for some reason it is counted as delegated. | [optional]
**quote** | [**\Tzkt\Model\StatisticsQuote**](StatisticsQuote.md) |  | [optional]
**total_vested** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
