<?php
/**
 * RewardSplitTest
 *
 * PHP version 8.1
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction    TzKT is the most widely used tool in Tezos that provides you with convenient and flexible access to the Tezos blockchain data, processed and indexed by its own indexer.   You can fetch all historical data via REST API, or subscribe for real-time data via WebSocket API. TzKT was built by the joint efforts of the entire Tezos community   to help developers build more services and dapps on top of Tezos.    TzKT Indexer and API are [open-source](https://github.com/baking-bad/tzkt), so don't be afraid to depend on the third-party service,  because you can always clone, build and run it yourself to have full control over all the components.    Feel free to contact us if you have any questions or feature requests.  Your feedback is much appreciated!    - Discord: https://discord.gg/aG8XKuwsQd  - Telegram: https://t.me/baking_bad_chat  - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  - Twitter: https://twitter.com/TezosBakingBad  - Email: hello@bakingbad.dev    And don't forget to star TzKT [on GitHub](https://github.com/baking-bad/tzkt) if you like it 😊    # Get Started    There are two API services provided for public use:  - **Free TzKT API** with free anonymous access;  - **TzKT Pro** with paid subscriptions with increased rate limits, off-chain data, extended support and business-level SLA.    You can find more details about differences between available tiers [here](https://tzkt.io/api).    ## Free TzKT API    Free-tier TzKT API is the best way to get started and explore available Tezos data and API functionality.  It doesn't require authorization and is free for everyone and for both commercial and non-commercial use.    > #### Note: attribution required  If you use free-tier TzKT API, you **must** mention it on your website or application by placing the label  \"Powered by TzKT API\", or \"Built with TzKT API\", or \"Data provided by TzKT API\" with a direct link to [tzkt.io](https://tzkt.io).    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io))  - Rionet: `https://api.rionet.tzkt.io/` ([view docs](https://api.rionet.tzkt.io))    ### Sending Requests    To send a request to Free TzKT API you need literally nothing. Just take the base URL of the particular network  (for example, Tezos mainnet: `https://api.tzkt.io`) and append the path of the particular endpoint  (for example, chain's head: `/v1/head`), that's pretty much it:     ```bash  curl https://api.tzkt.io/v1/head  ```    Read through this documentation to explore available endpoints, query parameters  (note, if you click on a query parameter, you will see available modes, such as `.eq`, `.in`, etc.)  and response models. If you have any questions, do not hesitate to ask for support, Tezos community has always been very friendly! 😉    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits.    If you exceed the limit, the API will respond with `HTTP 429` status code.    ## TzKT Pro    TzKT Pro is intended for professional use, for those who seek for extended capabilities, performance, reliability and business-level SLA.  TzKT Pro service is provided via paid subscriptions. Please, refer to [Pricing Plans](https://tzkt.io/api) to check available tiers.    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://pro.tzkt.io/` ([view docs](https://api.tzkt.io))  - Testnets: *let us know if you need TzKT Pro for testnets*    ### Authorization    To access TzKT Pro you will need to authorize requests with your personal API key, that you will receive on your email after purchasing a subscription.  This can be done by adding the query string parameter `?apikey={your_key}` or by adding the HTTP header `apikey: {your_key}`.    Note that you can have multiple API keys within a single subscription.    Keep your API keys private, do not publish it anywhere and do not hardcode it, especially in public repositories.  If your key was compromised, just let us know and we will issue a new one.    Also note that passing the API key via HTTP headers is more secure, because in HTTPS headers are encrypted,  but query string is not, so the key can be unintentionally exposed to third parties.    ### Sending Requests    Sending a request with the API key passed as a query string parameter:    ```bash  curl https://pro.tzkt.io/v1/head?apikey={your_key}  ```    Sending a request with the API key passed via an HTTP header:    ```bash  curl https://pro.tzkt.io/v1/head \\      -H 'apikey: {your_key}'  ```    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits for different pricing plans.    Also, TzKT Pro provides you with the additional HTTP headers to show the allowed limits, number of available requests  and the time remaining (in seconds) until the quota is reset. Here's an example:    ```  RateLimit-Limit: 50  RateLimit-Remaining: 49  RateLimit-Reset: 1  ```    It also sends general information about your rate limits per second and per day:    ```  X-RateLimit-Limit-Second: 50  X-RateLimit-Remaining-Second: 49  X-RateLimit-Limit-Day: 3000000  X-RateLimit-Remaining-Day: 2994953  ```    If you exceed the limit, the API will respond with `HTTP 429` status code.
 *
 * The version of the OpenAPI document: 1.14.9
 * Contact: hello@bakingbad.dev
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Tzkt\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * RewardSplitTest Class Doc Comment
 *
 * @description RewardSplit
 * @package     Tzkt
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RewardSplitTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "RewardSplit"
     */
    public function testRewardSplit()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "cycle"
     */
    public function testPropertyCycle()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "baking_power"
     */
    public function testPropertyBakingPower()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "total_baking_power"
     */
    public function testPropertyTotalBakingPower()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "own_delegated_balance"
     */
    public function testPropertyOwnDelegatedBalance()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "external_delegated_balance"
     */
    public function testPropertyExternalDelegatedBalance()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "delegators_count"
     */
    public function testPropertyDelegatorsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "own_staked_balance"
     */
    public function testPropertyOwnStakedBalance()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "external_staked_balance"
     */
    public function testPropertyExternalStakedBalance()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "stakers_count"
     */
    public function testPropertyStakersCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "expected_blocks"
     */
    public function testPropertyExpectedBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "expected_endorsements"
     */
    public function testPropertyExpectedEndorsements()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "expected_dal_shards"
     */
    public function testPropertyExpectedDalShards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "future_blocks"
     */
    public function testPropertyFutureBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "future_block_rewards"
     */
    public function testPropertyFutureBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "blocks"
     */
    public function testPropertyBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_rewards_delegated"
     */
    public function testPropertyBlockRewardsDelegated()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_rewards_staked_own"
     */
    public function testPropertyBlockRewardsStakedOwn()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_rewards_staked_edge"
     */
    public function testPropertyBlockRewardsStakedEdge()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_rewards_staked_shared"
     */
    public function testPropertyBlockRewardsStakedShared()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_blocks"
     */
    public function testPropertyMissedBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_block_rewards"
     */
    public function testPropertyMissedBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "future_endorsements"
     */
    public function testPropertyFutureEndorsements()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "future_endorsement_rewards"
     */
    public function testPropertyFutureEndorsementRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsements"
     */
    public function testPropertyEndorsements()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsement_rewards_delegated"
     */
    public function testPropertyEndorsementRewardsDelegated()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsement_rewards_staked_own"
     */
    public function testPropertyEndorsementRewardsStakedOwn()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsement_rewards_staked_edge"
     */
    public function testPropertyEndorsementRewardsStakedEdge()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsement_rewards_staked_shared"
     */
    public function testPropertyEndorsementRewardsStakedShared()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_endorsements"
     */
    public function testPropertyMissedEndorsements()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_endorsement_rewards"
     */
    public function testPropertyMissedEndorsementRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "future_dal_attestation_rewards"
     */
    public function testPropertyFutureDalAttestationRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "dal_attestation_rewards_delegated"
     */
    public function testPropertyDalAttestationRewardsDelegated()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "dal_attestation_rewards_staked_own"
     */
    public function testPropertyDalAttestationRewardsStakedOwn()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "dal_attestation_rewards_staked_edge"
     */
    public function testPropertyDalAttestationRewardsStakedEdge()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "dal_attestation_rewards_staked_shared"
     */
    public function testPropertyDalAttestationRewardsStakedShared()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_dal_attestation_rewards"
     */
    public function testPropertyMissedDalAttestationRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_fees"
     */
    public function testPropertyBlockFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_block_fees"
     */
    public function testPropertyMissedBlockFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_rewards"
     */
    public function testPropertyDoubleBakingRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_lost_staked"
     */
    public function testPropertyDoubleBakingLostStaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_lost_unstaked"
     */
    public function testPropertyDoubleBakingLostUnstaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_lost_external_staked"
     */
    public function testPropertyDoubleBakingLostExternalStaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_lost_external_unstaked"
     */
    public function testPropertyDoubleBakingLostExternalUnstaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_rewards"
     */
    public function testPropertyDoubleEndorsingRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_lost_staked"
     */
    public function testPropertyDoubleEndorsingLostStaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_lost_unstaked"
     */
    public function testPropertyDoubleEndorsingLostUnstaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_lost_external_staked"
     */
    public function testPropertyDoubleEndorsingLostExternalStaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_lost_external_unstaked"
     */
    public function testPropertyDoubleEndorsingLostExternalUnstaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_preendorsing_rewards"
     */
    public function testPropertyDoublePreendorsingRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_preendorsing_lost_staked"
     */
    public function testPropertyDoublePreendorsingLostStaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_preendorsing_lost_unstaked"
     */
    public function testPropertyDoublePreendorsingLostUnstaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_preendorsing_lost_external_staked"
     */
    public function testPropertyDoublePreendorsingLostExternalStaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_preendorsing_lost_external_unstaked"
     */
    public function testPropertyDoublePreendorsingLostExternalUnstaked()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "vdf_revelation_rewards_delegated"
     */
    public function testPropertyVdfRevelationRewardsDelegated()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "vdf_revelation_rewards_staked_own"
     */
    public function testPropertyVdfRevelationRewardsStakedOwn()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "vdf_revelation_rewards_staked_edge"
     */
    public function testPropertyVdfRevelationRewardsStakedEdge()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "vdf_revelation_rewards_staked_shared"
     */
    public function testPropertyVdfRevelationRewardsStakedShared()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nonce_revelation_rewards_delegated"
     */
    public function testPropertyNonceRevelationRewardsDelegated()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nonce_revelation_rewards_staked_own"
     */
    public function testPropertyNonceRevelationRewardsStakedOwn()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nonce_revelation_rewards_staked_edge"
     */
    public function testPropertyNonceRevelationRewardsStakedEdge()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nonce_revelation_rewards_staked_shared"
     */
    public function testPropertyNonceRevelationRewardsStakedShared()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nonce_revelation_losses"
     */
    public function testPropertyNonceRevelationLosses()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "delegators"
     */
    public function testPropertyDelegators()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_rewards_liquid"
     */
    public function testPropertyBlockRewardsLiquid()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsement_rewards_liquid"
     */
    public function testPropertyEndorsementRewardsLiquid()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nonce_revelation_rewards_liquid"
     */
    public function testPropertyNonceRevelationRewardsLiquid()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "vdf_revelation_rewards_liquid"
     */
    public function testPropertyVdfRevelationRewardsLiquid()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "revelation_rewards"
     */
    public function testPropertyRevelationRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "revelation_losses"
     */
    public function testPropertyRevelationLosses()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_preendorsing_losses"
     */
    public function testPropertyDoublePreendorsingLosses()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_losses"
     */
    public function testPropertyDoubleEndorsingLosses()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_losses"
     */
    public function testPropertyDoubleBakingLosses()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsement_rewards"
     */
    public function testPropertyEndorsementRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_rewards"
     */
    public function testPropertyBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "staking_balance"
     */
    public function testPropertyStakingBalance()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "active_stake"
     */
    public function testPropertyActiveStake()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "selected_stake"
     */
    public function testPropertySelectedStake()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "delegated_balance"
     */
    public function testPropertyDelegatedBalance()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "num_delegators"
     */
    public function testPropertyNumDelegators()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "own_blocks"
     */
    public function testPropertyOwnBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "extra_blocks"
     */
    public function testPropertyExtraBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_own_blocks"
     */
    public function testPropertyMissedOwnBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_extra_blocks"
     */
    public function testPropertyMissedExtraBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "uncovered_own_blocks"
     */
    public function testPropertyUncoveredOwnBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "uncovered_extra_blocks"
     */
    public function testPropertyUncoveredExtraBlocks()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "uncovered_endorsements"
     */
    public function testPropertyUncoveredEndorsements()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "own_block_rewards"
     */
    public function testPropertyOwnBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "extra_block_rewards"
     */
    public function testPropertyExtraBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_own_block_rewards"
     */
    public function testPropertyMissedOwnBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_extra_block_rewards"
     */
    public function testPropertyMissedExtraBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "uncovered_own_block_rewards"
     */
    public function testPropertyUncoveredOwnBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "uncovered_extra_block_rewards"
     */
    public function testPropertyUncoveredExtraBlockRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "uncovered_endorsement_rewards"
     */
    public function testPropertyUncoveredEndorsementRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "own_block_fees"
     */
    public function testPropertyOwnBlockFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "extra_block_fees"
     */
    public function testPropertyExtraBlockFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_own_block_fees"
     */
    public function testPropertyMissedOwnBlockFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "missed_extra_block_fees"
     */
    public function testPropertyMissedExtraBlockFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "uncovered_own_block_fees"
     */
    public function testPropertyUncoveredOwnBlockFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "uncovered_extra_block_fees"
     */
    public function testPropertyUncoveredExtraBlockFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_lost_deposits"
     */
    public function testPropertyDoubleBakingLostDeposits()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_lost_rewards"
     */
    public function testPropertyDoubleBakingLostRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking_lost_fees"
     */
    public function testPropertyDoubleBakingLostFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_lost_deposits"
     */
    public function testPropertyDoubleEndorsingLostDeposits()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_lost_rewards"
     */
    public function testPropertyDoubleEndorsingLostRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing_lost_fees"
     */
    public function testPropertyDoubleEndorsingLostFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "revelation_lost_rewards"
     */
    public function testPropertyRevelationLostRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "revelation_lost_fees"
     */
    public function testPropertyRevelationLostFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "future_block_deposits"
     */
    public function testPropertyFutureBlockDeposits()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_deposits"
     */
    public function testPropertyBlockDeposits()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "future_endorsement_deposits"
     */
    public function testPropertyFutureEndorsementDeposits()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsement_deposits"
     */
    public function testPropertyEndorsementDeposits()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
