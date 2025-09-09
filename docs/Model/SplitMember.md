# # SplitMember

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Address of the delegator | [optional]
**delegated_balance** | **int** | Amount delegated to the baker at the snapshot time (micro tez). This amount doesn&#39;t include staked amount. | [optional]
**staked_pseudotokens** | **string** | Amount of staked pseudotokens at the snapshot time, representing staker&#39;s share within the baker&#39;s &#x60;externalStakedBalance&#x60;. | [optional]
**staked_balance** | **int** | Estimated amount staked to the baker at the snapshot time (micro tez). It&#39;s computed on-the-fly as &#x60;externalStakedBalance * stakedPseudotokens / issuedPseudotokens&#x60;. | [optional]
**emptied** | **bool** | Indicates whether the delegator is emptied (at the moment, not at the snapshot time). Emptied accounts (users with zero balance) should be re-allocated, so if you make payment to the emptied account you will pay allocation fee. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
