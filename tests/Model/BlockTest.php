<?php
/**
 * BlockTest
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
 * BlockTest Class Doc Comment
 *
 * @description Block
 * @package     Tzkt
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class BlockTest extends TestCase
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
     * Test "Block"
     */
    public function testBlock()
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
     * Test attribute "level"
     */
    public function testPropertyLevel()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "hash"
     */
    public function testPropertyHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "timestamp"
     */
    public function testPropertyTimestamp()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "proto"
     */
    public function testPropertyProto()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "payload_round"
     */
    public function testPropertyPayloadRound()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "block_round"
     */
    public function testPropertyBlockRound()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "validations"
     */
    public function testPropertyValidations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "deposit"
     */
    public function testPropertyDeposit()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reward_delegated"
     */
    public function testPropertyRewardDelegated()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reward_staked_own"
     */
    public function testPropertyRewardStakedOwn()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reward_staked_edge"
     */
    public function testPropertyRewardStakedEdge()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reward_staked_shared"
     */
    public function testPropertyRewardStakedShared()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bonus_delegated"
     */
    public function testPropertyBonusDelegated()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bonus_staked_own"
     */
    public function testPropertyBonusStakedOwn()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bonus_staked_edge"
     */
    public function testPropertyBonusStakedEdge()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bonus_staked_shared"
     */
    public function testPropertyBonusStakedShared()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "fees"
     */
    public function testPropertyFees()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nonce_revealed"
     */
    public function testPropertyNonceRevealed()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "proposer"
     */
    public function testPropertyProposer()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "producer"
     */
    public function testPropertyProducer()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "software"
     */
    public function testPropertySoftware()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "lb_toggle"
     */
    public function testPropertyLbToggle()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "lb_toggle_ema"
     */
    public function testPropertyLbToggleEma()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "ai_toggle"
     */
    public function testPropertyAiToggle()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "ai_toggle_ema"
     */
    public function testPropertyAiToggleEma()
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
     * Test attribute "preendorsements"
     */
    public function testPropertyPreendorsements()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "proposals"
     */
    public function testPropertyProposals()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "ballots"
     */
    public function testPropertyBallots()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "activations"
     */
    public function testPropertyActivations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "dal_entrapment_evidence_ops"
     */
    public function testPropertyDalEntrapmentEvidenceOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_baking"
     */
    public function testPropertyDoubleBaking()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_endorsing"
     */
    public function testPropertyDoubleEndorsing()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "double_preendorsing"
     */
    public function testPropertyDoublePreendorsing()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nonce_revelations"
     */
    public function testPropertyNonceRevelations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "vdf_revelations"
     */
    public function testPropertyVdfRevelations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "delegations"
     */
    public function testPropertyDelegations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "originations"
     */
    public function testPropertyOriginations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "transactions"
     */
    public function testPropertyTransactions()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reveals"
     */
    public function testPropertyReveals()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "register_constants"
     */
    public function testPropertyRegisterConstants()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "set_deposits_limits"
     */
    public function testPropertySetDepositsLimits()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "transfer_ticket_ops"
     */
    public function testPropertyTransferTicketOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tx_rollup_commit_ops"
     */
    public function testPropertyTxRollupCommitOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tx_rollup_dispatch_tickets_ops"
     */
    public function testPropertyTxRollupDispatchTicketsOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tx_rollup_finalize_commitment_ops"
     */
    public function testPropertyTxRollupFinalizeCommitmentOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tx_rollup_origination_ops"
     */
    public function testPropertyTxRollupOriginationOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tx_rollup_rejection_ops"
     */
    public function testPropertyTxRollupRejectionOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tx_rollup_remove_commitment_ops"
     */
    public function testPropertyTxRollupRemoveCommitmentOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tx_rollup_return_bond_ops"
     */
    public function testPropertyTxRollupReturnBondOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tx_rollup_submit_batch_ops"
     */
    public function testPropertyTxRollupSubmitBatchOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "increase_paid_storage_ops"
     */
    public function testPropertyIncreasePaidStorageOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "update_consensus_key_ops"
     */
    public function testPropertyUpdateConsensusKeyOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "drain_delegate_ops"
     */
    public function testPropertyDrainDelegateOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sr_add_messages_ops"
     */
    public function testPropertySrAddMessagesOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sr_cement_ops"
     */
    public function testPropertySrCementOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sr_execute_ops"
     */
    public function testPropertySrExecuteOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sr_originate_ops"
     */
    public function testPropertySrOriginateOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sr_publish_ops"
     */
    public function testPropertySrPublishOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sr_recover_bond_ops"
     */
    public function testPropertySrRecoverBondOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sr_refute_ops"
     */
    public function testPropertySrRefuteOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "staking_ops"
     */
    public function testPropertyStakingOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "set_delegate_parameters_ops"
     */
    public function testPropertySetDelegateParametersOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "dal_publish_commitment_ops"
     */
    public function testPropertyDalPublishCommitmentOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "migrations"
     */
    public function testPropertyMigrations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "revelation_penalties"
     */
    public function testPropertyRevelationPenalties()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "endorsing_rewards"
     */
    public function testPropertyEndorsingRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "dal_attestation_rewards"
     */
    public function testPropertyDalAttestationRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "autostaking_ops"
     */
    public function testPropertyAutostakingOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "quote"
     */
    public function testPropertyQuote()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reward_liquid"
     */
    public function testPropertyRewardLiquid()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bonus_liquid"
     */
    public function testPropertyBonusLiquid()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reward"
     */
    public function testPropertyReward()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bonus"
     */
    public function testPropertyBonus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "priority"
     */
    public function testPropertyPriority()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "baker"
     */
    public function testPropertyBaker()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "lb_escape_vote"
     */
    public function testPropertyLbEscapeVote()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "lb_escape_ema"
     */
    public function testPropertyLbEscapeEma()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
