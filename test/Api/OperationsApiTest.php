<?php
/**
 * OperationsApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction    TzKT is the most widely used tool in Tezos that provides you with convenient and flexible access to the Tezos blockchain data, processed and indexed by its own indexer.   You can fetch all historical data via REST API, or subscribe for real-time data via WebSocket API. TzKT was built by the joint efforts of the entire Tezos community   to help developers build more services and dapps on top of Tezos.    TzKT Indexer and API are [open-source](https://github.com/baking-bad/tzkt), so don't be afraid to depend on the third-party service,  because you can always clone, build and run it yourself to have full control over all the components.    Feel free to contact us if you have any questions or feature requests.  Your feedback is much appreciated!    - Discord: https://discord.gg/aG8XKuwsQd  - Telegram: https://t.me/baking_bad_chat  - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  - Twitter: https://twitter.com/TezosBakingBad  - Email: hello@bakingbad.dev    And don't forget to star TzKT [on GitHub](https://github.com/baking-bad/tzkt) if you like it 😊    # Get Started    There are two API services provided for public use:  - **Free TzKT API** with free anonymous access;  - **TzKT Pro** with paid subscriptions with increased rate limits, off-chain data, extended support and business-level SLA.    You can find more details about differences between available tiers [here](https://tzkt.io/api).    ## Free TzKT API    Free-tier TzKT API is the best way to get started and explore available Tezos data and API functionality.  It doesn't require authorization and is free for everyone and for both commercial and non-commercial use.    > #### Note: attribution required  If you use free-tier TzKT API, you **must** mention it on your website or application by placing the label  \"Powered by TzKT API\", or \"Built with TzKT API\", or \"Data provided by TzKT API\" with a direct link to [tzkt.io](https://tzkt.io).    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io))  - Quebecnet: `https://api.quebecnet.tzkt.io/` ([view docs](https://api.quebecnet.tzkt.io))    ### Sending Requests    To send a request to Free TzKT API you need literally nothing. Just take the base URL of the particular network  (for example, Tezos mainnet: `https://api.tzkt.io`) and append the path of the particular endpoint  (for example, chain's head: `/v1/head`), that's pretty much it:     ```bash  curl https://api.tzkt.io/v1/head  ```    Read through this documentation to explore available endpoints, query parameters  (note, if you click on a query parameter, you will see available modes, such as `.eq`, `.in`, etc.)  and response models. If you have any questions, do not hesitate to ask for support, Tezos community has always been very friendly! 😉    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits.    If you exceed the limit, the API will respond with `HTTP 429` status code.    ## TzKT Pro    TzKT Pro is intended for professional use, for those who seek for extended capabilities, performance, reliability and business-level SLA.  TzKT Pro service is provided via paid subscriptions. Please, refer to [Pricing Plans](https://tzkt.io/api) to check available tiers.    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://pro.tzkt.io/` ([view docs](https://api.tzkt.io))  - Testnets: *let us know if you need TzKT Pro for testnets*    ### Authorization    To access TzKT Pro you will need to authorize requests with your personal API key, that you will receive on your email after purchasing a subscription.  This can be done by adding the query string parameter `?apikey={your_key}` or by adding the HTTP header `apikey: {your_key}`.    Note that you can have multiple API keys within a single subscription.    Keep your API keys private, do not publish it anywhere and do not hardcode it, especially in public repositories.  If your key was compromised, just let us know and we will issue a new one.    Also note that passing the API key via HTTP headers is more secure, because in HTTPS headers are encrypted,  but query string is not, so the key can be unintentionally exposed to third parties.    ### Sending Requests    Sending a request with the API key passed as a query string parameter:    ```bash  curl https://pro.tzkt.io/v1/head?apikey={your_key}  ```    Sending a request with the API key passed via an HTTP header:    ```bash  curl https://pro.tzkt.io/v1/head \\      -H 'apikey: {your_key}'  ```    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits for different pricing plans.    Also, TzKT Pro provides you with the additional HTTP headers to show the allowed limits, number of available requests  and the time remaining (in seconds) until the quota is reset. Here's an example:    ```  RateLimit-Limit: 50  RateLimit-Remaining: 49  RateLimit-Reset: 1  ```    It also sends general information about your rate limits per second and per day:    ```  X-RateLimit-Limit-Second: 50  X-RateLimit-Remaining-Second: 49  X-RateLimit-Limit-Day: 3000000  X-RateLimit-Remaining-Day: 2994953  ```    If you exceed the limit, the API will respond with `HTTP 429` status code.
 *
 * The version of the OpenAPI document: 1.14.7
 * Contact: hello@bakingbad.dev
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Tzkt\Test\Api;

use \Tzkt\Configuration;
use \Tzkt\ApiException;
use \Tzkt\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * OperationsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OperationsApiTest extends TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for operationsGetActivationByHash
     *
     * Get activation by hash.
     *
     */
    public function testOperationsGetActivationByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetActivations
     *
     * Get activations.
     *
     */
    public function testOperationsGetActivations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetActivationsCount
     *
     * Get activations count.
     *
     */
    public function testOperationsGetActivationsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetAutostakingOps
     *
     * Get autostaking ops.
     *
     */
    public function testOperationsGetAutostakingOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetAutostakingOpsCount
     *
     * Get autostaking ops count.
     *
     */
    public function testOperationsGetAutostakingOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetBaking
     *
     * Get baking.
     *
     */
    public function testOperationsGetBaking()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetBakingById
     *
     * Get baking by id.
     *
     */
    public function testOperationsGetBakingById()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetBakingCount
     *
     * Get baking count.
     *
     */
    public function testOperationsGetBakingCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetBallotByHash
     *
     * Get ballot by hash.
     *
     */
    public function testOperationsGetBallotByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetBallots
     *
     * Get ballots.
     *
     */
    public function testOperationsGetBallots()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetBallotsCount
     *
     * Get ballots count.
     *
     */
    public function testOperationsGetBallotsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetByHash
     *
     * Get operations by hash.
     *
     */
    public function testOperationsGetByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetByHashCounter
     *
     * Get operations by hash and counter.
     *
     */
    public function testOperationsGetByHashCounter()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetByHashCounterNonce
     *
     * Get operations by hash, counter and nonce.
     *
     */
    public function testOperationsGetByHashCounterNonce()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDalPublishCommitmentOps
     *
     * Get dal_publish_commitment ops.
     *
     */
    public function testOperationsGetDalPublishCommitmentOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDalPublishCommitmentOpsCount
     *
     * Get dal_publish_commitment ops count.
     *
     */
    public function testOperationsGetDalPublishCommitmentOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDelegationByHash
     *
     * Get delegation by hash.
     *
     */
    public function testOperationsGetDelegationByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDelegationStatus
     *
     * Get delegation status.
     *
     */
    public function testOperationsGetDelegationStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDelegations
     *
     * Get delegations.
     *
     */
    public function testOperationsGetDelegations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDelegationsCount
     *
     * Get delegations count.
     *
     */
    public function testOperationsGetDelegationsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoubleBaking
     *
     * Get double baking.
     *
     */
    public function testOperationsGetDoubleBaking()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoubleBakingByHash
     *
     * Get double baking by hash.
     *
     */
    public function testOperationsGetDoubleBakingByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoubleBakingCount
     *
     * Get double baking count.
     *
     */
    public function testOperationsGetDoubleBakingCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoubleEndorsing
     *
     * Get double endorsing.
     *
     */
    public function testOperationsGetDoubleEndorsing()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoubleEndorsingByHash
     *
     * Get double endorsing by hash.
     *
     */
    public function testOperationsGetDoubleEndorsingByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoubleEndorsingCount
     *
     * Get double endorsing count.
     *
     */
    public function testOperationsGetDoubleEndorsingCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoublePreendorsing
     *
     * Get double preendorsing.
     *
     */
    public function testOperationsGetDoublePreendorsing()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoublePreendorsingByHash
     *
     * Get double preendorsing by hash.
     *
     */
    public function testOperationsGetDoublePreendorsingByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDoublePreendorsingCount
     *
     * Get double preendorsing count.
     *
     */
    public function testOperationsGetDoublePreendorsingCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDrainDelegateByHash
     *
     * Get drain delegate by hash.
     *
     */
    public function testOperationsGetDrainDelegateByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDrainDelegateOps
     *
     * Get drain delegate.
     *
     */
    public function testOperationsGetDrainDelegateOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetDrainDelegateOpsCount
     *
     * Get drain delegate count.
     *
     */
    public function testOperationsGetDrainDelegateOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetEndorsementByHash
     *
     * Get endorsement by hash.
     *
     */
    public function testOperationsGetEndorsementByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetEndorsements
     *
     * Get endorsements.
     *
     */
    public function testOperationsGetEndorsements()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetEndorsementsCount
     *
     * Get endorsements count.
     *
     */
    public function testOperationsGetEndorsementsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetEndorsingRewardById
     *
     * Get endorsing reward by id.
     *
     */
    public function testOperationsGetEndorsingRewardById()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetEndorsingRewards
     *
     * Get endorsing rewards.
     *
     */
    public function testOperationsGetEndorsingRewards()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetEndorsingRewardsCount
     *
     * Get endorsing rewards count.
     *
     */
    public function testOperationsGetEndorsingRewardsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetIncreasePaidStorageByHash
     *
     * Get increase paid storage by hash.
     *
     */
    public function testOperationsGetIncreasePaidStorageByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetIncreasePaidStorageCount
     *
     * Get increase paid storage count.
     *
     */
    public function testOperationsGetIncreasePaidStorageCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetIncreasePaidStorageOps
     *
     * Get increase paid storage.
     *
     */
    public function testOperationsGetIncreasePaidStorageOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetMigrationById
     *
     * Get migration by id.
     *
     */
    public function testOperationsGetMigrationById()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetMigrations
     *
     * Get migrations.
     *
     */
    public function testOperationsGetMigrations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetMigrationsCount
     *
     * Get migrations count.
     *
     */
    public function testOperationsGetMigrationsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetNonceRevelationByHash
     *
     * Get nonce revelation by hash.
     *
     */
    public function testOperationsGetNonceRevelationByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetNonceRevelations
     *
     * Get nonce revelations.
     *
     */
    public function testOperationsGetNonceRevelations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetNonceRevelationsCount
     *
     * Get nonce revelations count.
     *
     */
    public function testOperationsGetNonceRevelationsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetOriginationByHash
     *
     * Get origination by hash.
     *
     */
    public function testOperationsGetOriginationByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetOriginationStatus
     *
     * Get origination status.
     *
     */
    public function testOperationsGetOriginationStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetOriginations
     *
     * Get originations.
     *
     */
    public function testOperationsGetOriginations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetOriginationsCount
     *
     * Get originations count.
     *
     */
    public function testOperationsGetOriginationsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetPreendorsementByHash
     *
     * Get preendorsement by hash.
     *
     */
    public function testOperationsGetPreendorsementByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetPreendorsements
     *
     * Get preendorsements.
     *
     */
    public function testOperationsGetPreendorsements()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetPreendorsementsCount
     *
     * Get preendorsements count.
     *
     */
    public function testOperationsGetPreendorsementsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetProposalByHash
     *
     * Get proposal by hash.
     *
     */
    public function testOperationsGetProposalByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetProposals
     *
     * Get proposals.
     *
     */
    public function testOperationsGetProposals()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetProposalsCount
     *
     * Get proposals count.
     *
     */
    public function testOperationsGetProposalsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRegisterConstantByHash
     *
     * Get register constant by hash.
     *
     */
    public function testOperationsGetRegisterConstantByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRegisterConstantStatus
     *
     * Get register constant status.
     *
     */
    public function testOperationsGetRegisterConstantStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRegisterConstants
     *
     * Get register constants.
     *
     */
    public function testOperationsGetRegisterConstants()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRegisterConstantsCount
     *
     * Get register constants count.
     *
     */
    public function testOperationsGetRegisterConstantsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRevealByHash
     *
     * Get reveal by hash.
     *
     */
    public function testOperationsGetRevealByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRevealStatus
     *
     * Get reveal status.
     *
     */
    public function testOperationsGetRevealStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetReveals
     *
     * Get reveals.
     *
     */
    public function testOperationsGetReveals()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRevealsCount
     *
     * Get reveals count.
     *
     */
    public function testOperationsGetRevealsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRevelationPenalties
     *
     * Get revelation penalties.
     *
     */
    public function testOperationsGetRevelationPenalties()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRevelationPenaltiesCount
     *
     * Get revelation penalties count.
     *
     */
    public function testOperationsGetRevelationPenaltiesCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetRevelationPenaltyById
     *
     * Get revelation penalty by id.
     *
     */
    public function testOperationsGetRevelationPenaltyById()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSetDelegateParametersOps
     *
     * Get set_delegate_parameters ops.
     *
     */
    public function testOperationsGetSetDelegateParametersOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSetDelegateParametersOpsCount
     *
     * Get set_delegate_parameters ops count.
     *
     */
    public function testOperationsGetSetDelegateParametersOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSetDepositsLimitByHash
     *
     * Get set deposits limit by hash.
     *
     */
    public function testOperationsGetSetDepositsLimitByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSetDepositsLimitStatus
     *
     * Get set deposits limit status.
     *
     */
    public function testOperationsGetSetDepositsLimitStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSetDepositsLimits
     *
     * Get set deposits limits.
     *
     */
    public function testOperationsGetSetDepositsLimits()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSetDepositsLimitsCount
     *
     * Get set deposits limits count.
     *
     */
    public function testOperationsGetSetDepositsLimitsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupAddMessagesOps
     *
     * Get smart rollup add messages.
     *
     */
    public function testOperationsGetSmartRollupAddMessagesOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupAddMessagesOpsCount
     *
     * Get smart rollup add messages count.
     *
     */
    public function testOperationsGetSmartRollupAddMessagesOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupCementOps
     *
     * Get smart rollup cement.
     *
     */
    public function testOperationsGetSmartRollupCementOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupCementOpsCount
     *
     * Get smart rollup cement count.
     *
     */
    public function testOperationsGetSmartRollupCementOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupExecuteOps
     *
     * Get smart rollup execute.
     *
     */
    public function testOperationsGetSmartRollupExecuteOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupExecuteOpsCount
     *
     * Get smart rollup execute count.
     *
     */
    public function testOperationsGetSmartRollupExecuteOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupOriginateOps
     *
     * Get smart rollup originate.
     *
     */
    public function testOperationsGetSmartRollupOriginateOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupOriginateOpsCount
     *
     * Get smart rollup originate count.
     *
     */
    public function testOperationsGetSmartRollupOriginateOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupPublishOps
     *
     * Get smart rollup publish.
     *
     */
    public function testOperationsGetSmartRollupPublishOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupPublishOpsCount
     *
     * Get smart rollup publish count.
     *
     */
    public function testOperationsGetSmartRollupPublishOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupRecoverBondOps
     *
     * Get smart rollup recover bond.
     *
     */
    public function testOperationsGetSmartRollupRecoverBondOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupRecoverBondOpsCount
     *
     * Get smart rollup recover bond count.
     *
     */
    public function testOperationsGetSmartRollupRecoverBondOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupRefuteOps
     *
     * Get smart rollup refute.
     *
     */
    public function testOperationsGetSmartRollupRefuteOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetSmartRollupRefuteOpsCount
     *
     * Get smart rollup refute count.
     *
     */
    public function testOperationsGetSmartRollupRefuteOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetStakingOps
     *
     * Get staking ops.
     *
     */
    public function testOperationsGetStakingOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetStakingOpsCount
     *
     * Get staking ops count.
     *
     */
    public function testOperationsGetStakingOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetStatus
     *
     * Get operation status.
     *
     */
    public function testOperationsGetStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransactionByHash
     *
     * Get transaction by hash.
     *
     */
    public function testOperationsGetTransactionByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransactionByHashCounter
     *
     * Get transaction by hash and counter.
     *
     */
    public function testOperationsGetTransactionByHashCounter()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransactionByHashCounterNonce
     *
     * Get transaction by hash, counter and nonce.
     *
     */
    public function testOperationsGetTransactionByHashCounterNonce()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransactionStatus
     *
     * Get transaction status.
     *
     */
    public function testOperationsGetTransactionStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransactions
     *
     * Get transactions.
     *
     */
    public function testOperationsGetTransactions()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransactionsCount
     *
     * Get transactions count.
     *
     */
    public function testOperationsGetTransactionsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransferTicketOps
     *
     * Get transfer ticket.
     *
     */
    public function testOperationsGetTransferTicketOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransferTicketOpsByHash
     *
     * Get transfer ticket by hash.
     *
     */
    public function testOperationsGetTransferTicketOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransferTicketOpsCount
     *
     * Get transfer ticket count.
     *
     */
    public function testOperationsGetTransferTicketOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTransferTicketStatus
     *
     * Get transfer ticket status.
     *
     */
    public function testOperationsGetTransferTicketStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupCommitOps
     *
     * Get tx rollup commit.
     *
     */
    public function testOperationsGetTxRollupCommitOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupCommitOpsByHash
     *
     * Get tx rollup commit by hash.
     *
     */
    public function testOperationsGetTxRollupCommitOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupCommitOpsCount
     *
     * Get tx rollup commit count.
     *
     */
    public function testOperationsGetTxRollupCommitOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupCommitStatus
     *
     * Get tx rollup commit status.
     *
     */
    public function testOperationsGetTxRollupCommitStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupDispatchTicketsOps
     *
     * Get tx rollup dispatch tickets.
     *
     */
    public function testOperationsGetTxRollupDispatchTicketsOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupDispatchTicketsOpsByHash
     *
     * Get tx rollup dispatch tickets by hash.
     *
     */
    public function testOperationsGetTxRollupDispatchTicketsOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupDispatchTicketsOpsCount
     *
     * Get tx rollup dispatch tickets count.
     *
     */
    public function testOperationsGetTxRollupDispatchTicketsOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupDispatchTicketsStatus
     *
     * Get tx rollup dispatch tickets status.
     *
     */
    public function testOperationsGetTxRollupDispatchTicketsStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupFinalizeCommitmentOps
     *
     * Get tx rollup finalize commitment.
     *
     */
    public function testOperationsGetTxRollupFinalizeCommitmentOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupFinalizeCommitmentOpsByHash
     *
     * Get tx rollup finalize commitment by hash.
     *
     */
    public function testOperationsGetTxRollupFinalizeCommitmentOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupFinalizeCommitmentOpsCount
     *
     * Get tx rollup finalize commitment count.
     *
     */
    public function testOperationsGetTxRollupFinalizeCommitmentOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupFinalizeCommitmentStatus
     *
     * Get tx rollup finalize commitment status.
     *
     */
    public function testOperationsGetTxRollupFinalizeCommitmentStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupOriginationOps
     *
     * Get tx rollup origination.
     *
     */
    public function testOperationsGetTxRollupOriginationOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupOriginationOpsByHash
     *
     * Get tx rollup origination by hash.
     *
     */
    public function testOperationsGetTxRollupOriginationOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupOriginationOpsCount
     *
     * Get tx rollup origination count.
     *
     */
    public function testOperationsGetTxRollupOriginationOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupOriginationStatus
     *
     * Get tx rollup origination status.
     *
     */
    public function testOperationsGetTxRollupOriginationStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupRejectionOps
     *
     * Get tx rollup rejection.
     *
     */
    public function testOperationsGetTxRollupRejectionOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupRejectionOpsByHash
     *
     * Get tx rollup rejection by hash.
     *
     */
    public function testOperationsGetTxRollupRejectionOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupRejectionOpsCount
     *
     * Get tx rollup rejection count.
     *
     */
    public function testOperationsGetTxRollupRejectionOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupRejectionStatus
     *
     * Get tx rollup rejection status.
     *
     */
    public function testOperationsGetTxRollupRejectionStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupRemoveCommitmentOps
     *
     * Get tx rollup remove commitment.
     *
     */
    public function testOperationsGetTxRollupRemoveCommitmentOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupRemoveCommitmentOpsByHash
     *
     * Get tx rollup remove commitment by hash.
     *
     */
    public function testOperationsGetTxRollupRemoveCommitmentOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupRemoveCommitmentOpsCount
     *
     * Get tx rollup remove commitment count.
     *
     */
    public function testOperationsGetTxRollupRemoveCommitmentOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupRemoveCommitmentStatus
     *
     * Get tx rollup remove commitment status.
     *
     */
    public function testOperationsGetTxRollupRemoveCommitmentStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupReturnBondOps
     *
     * Get tx rollup return bond.
     *
     */
    public function testOperationsGetTxRollupReturnBondOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupReturnBondOpsByHash
     *
     * Get tx rollup return bond by hash.
     *
     */
    public function testOperationsGetTxRollupReturnBondOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupReturnBondOpsCount
     *
     * Get tx rollup return bond count.
     *
     */
    public function testOperationsGetTxRollupReturnBondOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupReturnBondStatus
     *
     * Get tx rollup return bond status.
     *
     */
    public function testOperationsGetTxRollupReturnBondStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupSubmitBatchOps
     *
     * Get tx rollup submit batch.
     *
     */
    public function testOperationsGetTxRollupSubmitBatchOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupSubmitBatchOpsByHash
     *
     * Get tx rollup submit batch by hash.
     *
     */
    public function testOperationsGetTxRollupSubmitBatchOpsByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupSubmitBatchOpsCount
     *
     * Get tx rollup submit batch count.
     *
     */
    public function testOperationsGetTxRollupSubmitBatchOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetTxRollupSubmitBatchStatus
     *
     * Get tx rollup submit batch status.
     *
     */
    public function testOperationsGetTxRollupSubmitBatchStatus()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetUpdateConsensusKeyByHash
     *
     * Get update consensus key by hash.
     *
     */
    public function testOperationsGetUpdateConsensusKeyByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetUpdateConsensusKeyOps
     *
     * Get update consensus key.
     *
     */
    public function testOperationsGetUpdateConsensusKeyOps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetUpdateConsensusKeyOpsCount
     *
     * Get update consensus key count.
     *
     */
    public function testOperationsGetUpdateConsensusKeyOpsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetVdfRevelationByHash
     *
     * Get vdf revelation by hash.
     *
     */
    public function testOperationsGetVdfRevelationByHash()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetVdfRevelations
     *
     * Get vdf revelations.
     *
     */
    public function testOperationsGetVdfRevelations()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for operationsGetVdfRevelationsCount
     *
     * Get vdf revelations count.
     *
     */
    public function testOperationsGetVdfRevelationsCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
