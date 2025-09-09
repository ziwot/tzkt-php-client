# # SplitStaker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Address of the staker | [optional]
**staked_pseudotokens** | **string** | Amount of staked pseudotokens at the snapshot time, representing staker&#39;s share within the baker&#39;s &#x60;externalStakedBalance&#x60;. | [optional]
**staked_balance** | **int** | Estimated amount staked to the baker at the snapshot time (micro tez). It&#39;s computed on-the-fly as &#x60;externalStakedBalance * stakedPseudotokens / issuedPseudotokens&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
