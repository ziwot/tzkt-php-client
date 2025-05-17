<?php
/**
 * ContractsApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Tzkt\Test\Api;

use Tzkt\Configuration;
use Tzkt\ApiException;
use Tzkt\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ContractsApiTest Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContractsApiTest extends TestCase
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
     * Test case for contractsBuildEntrypointParametersGET
     *
     * Build entrypoint parameters.
     *
     */
    public function testContractsBuildEntrypointParametersGET()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsBuildEntrypointParametersPOST
     *
     * Build entrypoint parameters.
     *
     */
    public function testContractsBuildEntrypointParametersPOST()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGet
     *
     * Get contracts.
     *
     */
    public function testContractsGet()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetBigMapByName
     *
     * Get bigmap by name.
     *
     */
    public function testContractsGetBigMapByName()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetBigMapByNameKeys
     *
     * Get bigmap keys.
     *
     */
    public function testContractsGetBigMapByNameKeys()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetBigMaps
     *
     * Get contract bigmaps.
     *
     */
    public function testContractsGetBigMaps()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetByAddress
     *
     * Get contract by address.
     *
     */
    public function testContractsGetByAddress()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetCode
     *
     * Get contract code.
     *
     */
    public function testContractsGetCode()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetContractViewByName
     *
     * Get view by name.
     *
     */
    public function testContractsGetContractViewByName()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetContractViews
     *
     * Get contract views.
     *
     */
    public function testContractsGetContractViews()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetCount
     *
     * Get contracts count.
     *
     */
    public function testContractsGetCount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetEntrypointByName
     *
     * Get entrypoint by name.
     *
     */
    public function testContractsGetEntrypointByName()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetEntrypoints
     *
     * Get contract entrypoints.
     *
     */
    public function testContractsGetEntrypoints()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetHistoricalKeys
     *
     * Get historical keys.
     *
     */
    public function testContractsGetHistoricalKeys()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetInterface
     *
     * Get JSON Schema [2020-12] interface for the contract.
     *
     */
    public function testContractsGetInterface()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetKey
     *
     * Get bigmap key.
     *
     */
    public function testContractsGetKey()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetKey2
     *
     * Get historical key.
     *
     */
    public function testContractsGetKey2()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetKeyUpdates
     *
     * Get bigmap key updates.
     *
     */
    public function testContractsGetKeyUpdates()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetRawStorage
     *
     * Get raw contract storage.
     *
     */
    public function testContractsGetRawStorage()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetRawStorageHistory
     *
     * Get raw contract storage history.
     *
     */
    public function testContractsGetRawStorageHistory()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetRawStorageSchema
     *
     * Get raw contract storage schema.
     *
     */
    public function testContractsGetRawStorageSchema()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetSame
     *
     * Get same contracts.
     *
     */
    public function testContractsGetSame()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetSimilar
     *
     * Get similar contracts.
     *
     */
    public function testContractsGetSimilar()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetStorage
     *
     * Get contract storage.
     *
     */
    public function testContractsGetStorage()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetStorageHistory
     *
     * Get contract storage history.
     *
     */
    public function testContractsGetStorageHistory()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contractsGetStorageSchema
     *
     * Get contract storage schema.
     *
     */
    public function testContractsGetStorageSchema()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
