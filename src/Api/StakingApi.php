<?php
/**
 * StakingApi
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
 * Do not edit the class manually.
 */

namespace Tzkt\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use Tzkt\ApiException;
use Tzkt\Configuration;
use Tzkt\HeaderSelector;
use Tzkt\ObjectSerializer;

/**
 * StakingApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StakingApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'stakingGetStakingUpdates' => [
            'application/json',
        ],
        'stakingGetStakingUpdatesCount' => [
            'application/json',
        ],
        'stakingGetUnstakeRequests' => [
            'application/json',
        ],
        'stakingGetUnstakeRequestsCount' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation stakingGetStakingUpdates
     *
     * Get staking updates
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdates'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\StakingUpdate[]
     */
    public function stakingGetStakingUpdates(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdates'][0]
    ): array
    {
        list($response) = $this->stakingGetStakingUpdatesWithHttpInfo($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation stakingGetStakingUpdatesWithHttpInfo
     *
     * Get staking updates
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdates'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\StakingUpdate[], HTTP status code, HTTP response headers (array of strings)
     */
    public function stakingGetStakingUpdatesWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdates'][0]
    ): array
    {
        $request = $this->stakingGetStakingUpdatesRequest($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $sort, $offset, $limit, $select, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\Tzkt\Model\StakingUpdate[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\StakingUpdate[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\StakingUpdate[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Tzkt\Model\StakingUpdate[]';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Tzkt\Model\StakingUpdate[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation stakingGetStakingUpdatesAsync
     *
     * Get staking updates
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function stakingGetStakingUpdatesAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdates'][0]
    ): PromiseInterface
    {
        return $this->stakingGetStakingUpdatesAsyncWithHttpInfo($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stakingGetStakingUpdatesAsyncWithHttpInfo
     *
     * Get staking updates
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function stakingGetStakingUpdatesAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdates'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\StakingUpdate[]';
        $request = $this->stakingGetStakingUpdatesRequest($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $sort, $offset, $limit, $select, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'stakingGetStakingUpdates'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function stakingGetStakingUpdatesRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdates'][0]
    ): Request
    {



















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling StakingApi.stakingGetStakingUpdates, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling StakingApi.stakingGetStakingUpdates, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/staking/updates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp,
            'timestamp', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cycle,
            'cycle', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $baker,
            'baker', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staker,
            'staker', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            '\Tzkt\Model\StakingUpdateTypeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount,
            'amount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $pseudotokens,
            'pseudotokens', // param base name
            '\Tzkt\Model\BigIntegerNullableParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rounding_error,
            'roundingError', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $autostaking_op_id,
            'autostakingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staking_op_id,
            'stakingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delegation_op_id,
            'delegationOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $double_baking_op_id,
            'doubleBakingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $double_endorsing_op_id,
            'doubleEndorsingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $double_preendorsing_op_id,
            'doublePreendorsingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation stakingGetStakingUpdatesCount
     *
     * Get staking updates count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdatesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function stakingGetStakingUpdatesCount(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdatesCount'][0]
    ): int
    {
        list($response) = $this->stakingGetStakingUpdatesCountWithHttpInfo($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $contentType);
        return $response;
    }

    /**
     * Operation stakingGetStakingUpdatesCountWithHttpInfo
     *
     * Get staking updates count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdatesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function stakingGetStakingUpdatesCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdatesCount'][0]
    ): array
    {
        $request = $this->stakingGetStakingUpdatesCountRequest($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('int', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('int' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'int', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = 'int';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation stakingGetStakingUpdatesCountAsync
     *
     * Get staking updates count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdatesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function stakingGetStakingUpdatesCountAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdatesCount'][0]
    ): PromiseInterface
    {
        return $this->stakingGetStakingUpdatesCountAsyncWithHttpInfo($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stakingGetStakingUpdatesCountAsyncWithHttpInfo
     *
     * Get staking updates count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdatesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function stakingGetStakingUpdatesCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdatesCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->stakingGetStakingUpdatesCountRequest($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'stakingGetStakingUpdatesCount'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter|null $type Filter by staking update type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $pseudotokens Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $autostaking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $staking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $delegation_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_baking_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_endorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $double_preendorsing_op_id Filter by the ID of the related operation.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetStakingUpdatesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function stakingGetStakingUpdatesCountRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $amount = null,
        ?\Tzkt\Model\AccountsGetStakedPseudotokensParameter $pseudotokens = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $autostaking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $staking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $delegation_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_baking_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_endorsing_op_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $double_preendorsing_op_id = null,
        string $contentType = self::contentTypes['stakingGetStakingUpdatesCount'][0]
    ): Request
    {


















        $resourcePath = '/v1/staking/updates/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp,
            'timestamp', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cycle,
            'cycle', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $baker,
            'baker', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staker,
            'staker', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            '\Tzkt\Model\StakingUpdateTypeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount,
            'amount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $pseudotokens,
            'pseudotokens', // param base name
            '\Tzkt\Model\BigIntegerNullableParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rounding_error,
            'roundingError', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $autostaking_op_id,
            'autostakingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staking_op_id,
            'stakingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delegation_op_id,
            'delegationOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $double_baking_op_id,
            'doubleBakingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $double_endorsing_op_id,
            'doubleEndorsingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $double_preendorsing_op_id,
            'doublePreendorsingOpId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation stakingGetUnstakeRequests
     *
     * Get unstake requests
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequests'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\UnstakeRequest[]
     */
    public function stakingGetUnstakeRequests(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequests'][0]
    ): array
    {
        list($response) = $this->stakingGetUnstakeRequestsWithHttpInfo($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation stakingGetUnstakeRequestsWithHttpInfo
     *
     * Get unstake requests
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequests'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\UnstakeRequest[], HTTP status code, HTTP response headers (array of strings)
     */
    public function stakingGetUnstakeRequestsWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequests'][0]
    ): array
    {
        $request = $this->stakingGetUnstakeRequestsRequest($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\Tzkt\Model\UnstakeRequest[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\UnstakeRequest[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\UnstakeRequest[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Tzkt\Model\UnstakeRequest[]';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Tzkt\Model\UnstakeRequest[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation stakingGetUnstakeRequestsAsync
     *
     * Get unstake requests
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequests'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function stakingGetUnstakeRequestsAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequests'][0]
    ): PromiseInterface
    {
        return $this->stakingGetUnstakeRequestsAsyncWithHttpInfo($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stakingGetUnstakeRequestsAsyncWithHttpInfo
     *
     * Get unstake requests
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequests'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function stakingGetUnstakeRequestsAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequests'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\UnstakeRequest[]';
        $request = $this->stakingGetUnstakeRequestsRequest($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'stakingGetUnstakeRequests'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequests'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function stakingGetUnstakeRequestsRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequests'][0]
    ): Request
    {



















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling StakingApi.stakingGetUnstakeRequests, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling StakingApi.stakingGetUnstakeRequests, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/staking/unstake_requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cycle,
            'cycle', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $baker,
            'baker', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staker,
            'staker', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $requested_amount,
            'requestedAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $restaked_amount,
            'restakedAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $finalized_amount,
            'finalizedAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $slashed_amount,
            'slashedAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rounding_error,
            'roundingError', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $actual_amount,
            'actualAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            '\Tzkt\Model\UnstakeRequestStatusParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updates_count,
            'updatesCount', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_level,
            'firstLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_time,
            'firstTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_level,
            'lastLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_time,
            'lastTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation stakingGetUnstakeRequestsCount
     *
     * Get unstake requests count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequestsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function stakingGetUnstakeRequestsCount(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequestsCount'][0]
    ): int
    {
        list($response) = $this->stakingGetUnstakeRequestsCountWithHttpInfo($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $contentType);
        return $response;
    }

    /**
     * Operation stakingGetUnstakeRequestsCountWithHttpInfo
     *
     * Get unstake requests count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequestsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function stakingGetUnstakeRequestsCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequestsCount'][0]
    ): array
    {
        $request = $this->stakingGetUnstakeRequestsCountRequest($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('int', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('int' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'int', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = 'int';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation stakingGetUnstakeRequestsCountAsync
     *
     * Get unstake requests count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequestsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function stakingGetUnstakeRequestsCountAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequestsCount'][0]
    ): PromiseInterface
    {
        return $this->stakingGetUnstakeRequestsCountAsyncWithHttpInfo($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stakingGetUnstakeRequestsCountAsyncWithHttpInfo
     *
     * Get unstake requests count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequestsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function stakingGetUnstakeRequestsCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequestsCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->stakingGetUnstakeRequestsCountRequest($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'stakingGetUnstakeRequestsCount'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $cycle Filter by cycle.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filter by related baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $staker Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $requested_amount Filter by requested amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $restaked_amount Filter by restaked amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $finalized_amount Filter by finalized amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $slashed_amount Filter by slashed amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $rounding_error Filter by protocol rounding error.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $actual_amount Filter by actual amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter|null $status Filter by status.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates_count Filter by staking updates count.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stakingGetUnstakeRequestsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function stakingGetUnstakeRequestsCountRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $cycle = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $baker = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $staker = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $requested_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $restaked_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $finalized_amount = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $slashed_amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $rounding_error = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $actual_amount = null,
        ?\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['stakingGetUnstakeRequestsCount'][0]
    ): Request
    {


















        $resourcePath = '/v1/staking/unstake_requests/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cycle,
            'cycle', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $baker,
            'baker', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staker,
            'staker', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $requested_amount,
            'requestedAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $restaked_amount,
            'restakedAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $finalized_amount,
            'finalizedAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $slashed_amount,
            'slashedAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rounding_error,
            'roundingError', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $actual_amount,
            'actualAmount', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            '\Tzkt\Model\UnstakeRequestStatusParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updates_count,
            'updatesCount', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_level,
            'firstLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_time,
            'firstTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_level,
            'lastLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_time,
            'lastTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
