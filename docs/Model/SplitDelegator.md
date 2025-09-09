# # SplitDelegator

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Address of the delegator | [optional]
**delegated_balance** | **int** | Amount delegated to the baker at the snapshot time (micro tez). This amount doesn&#39;t include staked amount. | [optional]
**emptied** | **bool** | Indicates whether the delegator is emptied (at the moment, not at the snapshot time). Emptied accounts (users with zero balance) should be re-allocated, so if you make payment to the emptied account you will pay allocation fee. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
