<?php
/**
 * AccountsApi
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
 * Do not edit the class manually.
 */

namespace Tzkt\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Tzkt\ApiException;
use Tzkt\Configuration;
use Tzkt\HeaderSelector;
use Tzkt\ObjectSerializer;

/**
 * AccountsApi Class Doc Comment
 *
 * @category Class
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'accountsGet' => [
            'application/json',
        ],
        'accountsGetBalance' => [
            'application/json',
        ],
        'accountsGetBalanceAtDate' => [
            'application/json',
        ],
        'accountsGetBalanceAtLevel' => [
            'application/json',
        ],
        'accountsGetBalanceHistory' => [
            'application/json',
        ],
        'accountsGetBalanceReport' => [
            'application/json',
        ],
        'accountsGetByAddress' => [
            'application/json',
        ],
        'accountsGetContracts' => [
            'application/json',
        ],
        'accountsGetCount' => [
            'application/json',
        ],
        'accountsGetCounter' => [
            'application/json',
        ],
        'accountsGetDelegators' => [
            'application/json',
        ],
        'accountsGetOperations' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
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
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation accountsGet
     *
     * Get accounts
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filters by internal id. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filters by address. (optional)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filters accounts by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $staked_pseudotokens Filters accounts by amount of staked pseudotokens. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filters accounts by last activity level (where the account was updated) (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;rollupBonds&#x60;, &#x60;firstActivity&#x60;, &#x60;lastActivity&#x60;, &#x60;numTransactions&#x60;, &#x60;numContracts&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGet'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Tzkt\Model\Account[]
     */
    public function accountsGet($id = null, $address = null, $type = null, $kind = null, $delegate = null, $staked_pseudotokens = null, $balance = null, $staked = null, $last_activity = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGet'][0])
    {
        list($response) = $this->accountsGetWithHttpInfo($id, $address, $type, $kind, $delegate, $staked_pseudotokens, $balance, $staked, $last_activity, $select, $sort, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetWithHttpInfo
     *
     * Get accounts
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filters by internal id. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filters by address. (optional)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filters accounts by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $staked_pseudotokens Filters accounts by amount of staked pseudotokens. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filters accounts by last activity level (where the account was updated) (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;rollupBonds&#x60;, &#x60;firstActivity&#x60;, &#x60;lastActivity&#x60;, &#x60;numTransactions&#x60;, &#x60;numContracts&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGet'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Tzkt\Model\Account[], HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetWithHttpInfo($id = null, $address = null, $type = null, $kind = null, $delegate = null, $staked_pseudotokens = null, $balance = null, $staked = null, $last_activity = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGet'][0])
    {
        $request = $this->accountsGetRequest($id, $address, $type, $kind, $delegate, $staked_pseudotokens, $balance, $staked, $last_activity, $select, $sort, $offset, $limit, $contentType);

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
                    if ('\Tzkt\Model\Account[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Account[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Account[]', []),
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

            $returnType = '\Tzkt\Model\Account[]';
            if ($returnType === '\SplFileObject') {
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
                        '\Tzkt\Model\Account[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountsGetAsync
     *
     * Get accounts
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filters by internal id. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filters by address. (optional)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filters accounts by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $staked_pseudotokens Filters accounts by amount of staked pseudotokens. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filters accounts by last activity level (where the account was updated) (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;rollupBonds&#x60;, &#x60;firstActivity&#x60;, &#x60;lastActivity&#x60;, &#x60;numTransactions&#x60;, &#x60;numContracts&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetAsync($id = null, $address = null, $type = null, $kind = null, $delegate = null, $staked_pseudotokens = null, $balance = null, $staked = null, $last_activity = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGet'][0])
    {
        return $this->accountsGetAsyncWithHttpInfo($id, $address, $type, $kind, $delegate, $staked_pseudotokens, $balance, $staked, $last_activity, $select, $sort, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetAsyncWithHttpInfo
     *
     * Get accounts
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filters by internal id. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filters by address. (optional)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filters accounts by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $staked_pseudotokens Filters accounts by amount of staked pseudotokens. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filters accounts by last activity level (where the account was updated) (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;rollupBonds&#x60;, &#x60;firstActivity&#x60;, &#x60;lastActivity&#x60;, &#x60;numTransactions&#x60;, &#x60;numContracts&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetAsyncWithHttpInfo($id = null, $address = null, $type = null, $kind = null, $delegate = null, $staked_pseudotokens = null, $balance = null, $staked = null, $last_activity = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGet'][0])
    {
        $returnType = '\Tzkt\Model\Account[]';
        $request = $this->accountsGetRequest($id, $address, $type, $kind, $delegate, $staked_pseudotokens, $balance, $staked, $last_activity, $select, $sort, $offset, $limit, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGet'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filters by internal id. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filters by address. (optional)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filters accounts by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedPseudotokensParameter|null $staked_pseudotokens Filters accounts by amount of staked pseudotokens. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filters accounts by last activity level (where the account was updated) (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;rollupBonds&#x60;, &#x60;firstActivity&#x60;, &#x60;lastActivity&#x60;, &#x60;numTransactions&#x60;, &#x60;numContracts&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetRequest($id = null, $address = null, $type = null, $kind = null, $delegate = null, $staked_pseudotokens = null, $balance = null, $staked = null, $last_activity = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGet'][0])
    {













        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGet, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGet, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/accounts';
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
            $address,
            'address', // param base name
            '\Tzkt\Model\AddressParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            '\Tzkt\Model\AccountTypeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $kind,
            'kind', // param base name
            '\Tzkt\Model\ContractKindParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delegate,
            'delegate', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staked_pseudotokens,
            'stakedPseudotokens', // param base name
            '\Tzkt\Model\BigIntegerNullableParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staked,
            'staked', // param base name
            '\Tzkt\Model\BoolParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity,
            'lastActivity', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectParameter', // openApiType
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
     * Operation accountsGetBalance
     *
     * Get balance
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalance'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return int
     */
    public function accountsGetBalance($address, string $contentType = self::contentTypes['accountsGetBalance'][0])
    {
        list($response) = $this->accountsGetBalanceWithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetBalanceWithHttpInfo
     *
     * Get balance
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalance'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetBalanceWithHttpInfo($address, string $contentType = self::contentTypes['accountsGetBalance'][0])
    {
        $request = $this->accountsGetBalanceRequest($address, $contentType);

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
                    if ('int' === '\SplFileObject') {
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
            if ($returnType === '\SplFileObject') {
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
     * Operation accountsGetBalanceAsync
     *
     * Get balance
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceAsync($address, string $contentType = self::contentTypes['accountsGetBalance'][0])
    {
        return $this->accountsGetBalanceAsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetBalanceAsyncWithHttpInfo
     *
     * Get balance
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceAsyncWithHttpInfo($address, string $contentType = self::contentTypes['accountsGetBalance'][0])
    {
        $returnType = 'int';
        $request = $this->accountsGetBalanceRequest($address, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetBalance'
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetBalanceRequest($address, string $contentType = self::contentTypes['accountsGetBalance'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetBalance'
            );
        }


        $resourcePath = '/v1/accounts/{address}/balance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation accountsGetBalanceAtDate
     *
     * Get balance at date
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime $datetime Datetime at which you want to know account balance (e.g. &#x60;2020-01-01&#x60;, or &#x60;2019-12-30T23:42:59Z&#x60;) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtDate'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return int
     */
    public function accountsGetBalanceAtDate($address, $datetime, string $contentType = self::contentTypes['accountsGetBalanceAtDate'][0])
    {
        list($response) = $this->accountsGetBalanceAtDateWithHttpInfo($address, $datetime, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetBalanceAtDateWithHttpInfo
     *
     * Get balance at date
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime $datetime Datetime at which you want to know account balance (e.g. &#x60;2020-01-01&#x60;, or &#x60;2019-12-30T23:42:59Z&#x60;) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtDate'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetBalanceAtDateWithHttpInfo($address, $datetime, string $contentType = self::contentTypes['accountsGetBalanceAtDate'][0])
    {
        $request = $this->accountsGetBalanceAtDateRequest($address, $datetime, $contentType);

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
                    if ('int' === '\SplFileObject') {
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
            if ($returnType === '\SplFileObject') {
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
     * Operation accountsGetBalanceAtDateAsync
     *
     * Get balance at date
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime $datetime Datetime at which you want to know account balance (e.g. &#x60;2020-01-01&#x60;, or &#x60;2019-12-30T23:42:59Z&#x60;) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceAtDateAsync($address, $datetime, string $contentType = self::contentTypes['accountsGetBalanceAtDate'][0])
    {
        return $this->accountsGetBalanceAtDateAsyncWithHttpInfo($address, $datetime, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetBalanceAtDateAsyncWithHttpInfo
     *
     * Get balance at date
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime $datetime Datetime at which you want to know account balance (e.g. &#x60;2020-01-01&#x60;, or &#x60;2019-12-30T23:42:59Z&#x60;) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceAtDateAsyncWithHttpInfo($address, $datetime, string $contentType = self::contentTypes['accountsGetBalanceAtDate'][0])
    {
        $returnType = 'int';
        $request = $this->accountsGetBalanceAtDateRequest($address, $datetime, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetBalanceAtDate'
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime $datetime Datetime at which you want to know account balance (e.g. &#x60;2020-01-01&#x60;, or &#x60;2019-12-30T23:42:59Z&#x60;) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetBalanceAtDateRequest($address, $datetime, string $contentType = self::contentTypes['accountsGetBalanceAtDate'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetBalanceAtDate'
            );
        }

        // verify the required parameter 'datetime' is set
        if ($datetime === null || (is_array($datetime) && count($datetime) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $datetime when calling accountsGetBalanceAtDate'
            );
        }


        $resourcePath = '/v1/accounts/{address}/balance_history/{datetime}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($datetime !== null) {
            $resourcePath = str_replace(
                '{' . 'datetime' . '}',
                ObjectSerializer::toPathValue($datetime),
                $resourcePath
            );
        }


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
     * Operation accountsGetBalanceAtLevel
     *
     * Get balance at level
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int $level Block height at which you want to know account balance (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtLevel'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return int
     */
    public function accountsGetBalanceAtLevel($address, $level, string $contentType = self::contentTypes['accountsGetBalanceAtLevel'][0])
    {
        list($response) = $this->accountsGetBalanceAtLevelWithHttpInfo($address, $level, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetBalanceAtLevelWithHttpInfo
     *
     * Get balance at level
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int $level Block height at which you want to know account balance (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtLevel'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetBalanceAtLevelWithHttpInfo($address, $level, string $contentType = self::contentTypes['accountsGetBalanceAtLevel'][0])
    {
        $request = $this->accountsGetBalanceAtLevelRequest($address, $level, $contentType);

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
                    if ('int' === '\SplFileObject') {
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
            if ($returnType === '\SplFileObject') {
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
     * Operation accountsGetBalanceAtLevelAsync
     *
     * Get balance at level
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int $level Block height at which you want to know account balance (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtLevel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceAtLevelAsync($address, $level, string $contentType = self::contentTypes['accountsGetBalanceAtLevel'][0])
    {
        return $this->accountsGetBalanceAtLevelAsyncWithHttpInfo($address, $level, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetBalanceAtLevelAsyncWithHttpInfo
     *
     * Get balance at level
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int $level Block height at which you want to know account balance (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtLevel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceAtLevelAsyncWithHttpInfo($address, $level, string $contentType = self::contentTypes['accountsGetBalanceAtLevel'][0])
    {
        $returnType = 'int';
        $request = $this->accountsGetBalanceAtLevelRequest($address, $level, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetBalanceAtLevel'
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int $level Block height at which you want to know account balance (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceAtLevel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetBalanceAtLevelRequest($address, $level, string $contentType = self::contentTypes['accountsGetBalanceAtLevel'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetBalanceAtLevel'
            );
        }

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $level when calling accountsGetBalanceAtLevel'
            );
        }


        $resourcePath = '/v1/accounts/{address}/balance_history/{level}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($level !== null) {
            $resourcePath = str_replace(
                '{' . 'level' . '}',
                ObjectSerializer::toPathValue($level),
                $resourcePath
            );
        }


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
     * Operation accountsGetBalanceHistory
     *
     * Get balance history
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int|null $step Step of the time series, for example if &#x60;step &#x3D; 1000&#x60; you will get balances at blocks &#x60;1000, 2000, 3000, ...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts historical balances by specified field. Supported fields: &#x60;level&#x60;. (optional)
     * @param  int|null $offset Specifies which or how many items should be skipped (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceHistory'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Tzkt\Model\HistoricalBalance[]
     */
    public function accountsGetBalanceHistory($address, $step = null, $select = null, $sort = null, $offset = 0, $limit = 100, $quote = null, string $contentType = self::contentTypes['accountsGetBalanceHistory'][0])
    {
        list($response) = $this->accountsGetBalanceHistoryWithHttpInfo($address, $step, $select, $sort, $offset, $limit, $quote, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetBalanceHistoryWithHttpInfo
     *
     * Get balance history
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int|null $step Step of the time series, for example if &#x60;step &#x3D; 1000&#x60; you will get balances at blocks &#x60;1000, 2000, 3000, ...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts historical balances by specified field. Supported fields: &#x60;level&#x60;. (optional)
     * @param  int|null $offset Specifies which or how many items should be skipped (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceHistory'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Tzkt\Model\HistoricalBalance[], HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetBalanceHistoryWithHttpInfo($address, $step = null, $select = null, $sort = null, $offset = 0, $limit = 100, $quote = null, string $contentType = self::contentTypes['accountsGetBalanceHistory'][0])
    {
        $request = $this->accountsGetBalanceHistoryRequest($address, $step, $select, $sort, $offset, $limit, $quote, $contentType);

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
                    if ('\Tzkt\Model\HistoricalBalance[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\HistoricalBalance[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\HistoricalBalance[]', []),
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

            $returnType = '\Tzkt\Model\HistoricalBalance[]';
            if ($returnType === '\SplFileObject') {
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
                        '\Tzkt\Model\HistoricalBalance[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountsGetBalanceHistoryAsync
     *
     * Get balance history
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int|null $step Step of the time series, for example if &#x60;step &#x3D; 1000&#x60; you will get balances at blocks &#x60;1000, 2000, 3000, ...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts historical balances by specified field. Supported fields: &#x60;level&#x60;. (optional)
     * @param  int|null $offset Specifies which or how many items should be skipped (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceHistoryAsync($address, $step = null, $select = null, $sort = null, $offset = 0, $limit = 100, $quote = null, string $contentType = self::contentTypes['accountsGetBalanceHistory'][0])
    {
        return $this->accountsGetBalanceHistoryAsyncWithHttpInfo($address, $step, $select, $sort, $offset, $limit, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetBalanceHistoryAsyncWithHttpInfo
     *
     * Get balance history
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int|null $step Step of the time series, for example if &#x60;step &#x3D; 1000&#x60; you will get balances at blocks &#x60;1000, 2000, 3000, ...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts historical balances by specified field. Supported fields: &#x60;level&#x60;. (optional)
     * @param  int|null $offset Specifies which or how many items should be skipped (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceHistoryAsyncWithHttpInfo($address, $step = null, $select = null, $sort = null, $offset = 0, $limit = 100, $quote = null, string $contentType = self::contentTypes['accountsGetBalanceHistory'][0])
    {
        $returnType = '\Tzkt\Model\HistoricalBalance[]';
        $request = $this->accountsGetBalanceHistoryRequest($address, $step, $select, $sort, $offset, $limit, $quote, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetBalanceHistory'
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  int|null $step Step of the time series, for example if &#x60;step &#x3D; 1000&#x60; you will get balances at blocks &#x60;1000, 2000, 3000, ...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts historical balances by specified field. Supported fields: &#x60;level&#x60;. (optional)
     * @param  int|null $offset Specifies which or how many items should be skipped (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetBalanceHistoryRequest($address, $step = null, $select = null, $sort = null, $offset = 0, $limit = 100, $quote = null, string $contentType = self::contentTypes['accountsGetBalanceHistory'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetBalanceHistory'
            );
        }





        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGetBalanceHistory, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGetBalanceHistory, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/accounts/{address}/balance_history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $step,
            'step', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectParameter', // openApiType
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
            'integer', // openApiType
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
            $quote,
            'quote', // param base name
            '\Tzkt\Model\Symbols', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation accountsGetBalanceReport
     *
     * Get account report
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime|null $from Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31) (optional)
     * @param  \DateTime|null $to End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31) (optional)
     * @param  string|null $currency Currency to convert amounts to (&#x60;btc&#x60;, &#x60;eur&#x60;, &#x60;usd&#x60;, &#x60;cny&#x60;, &#x60;jpy&#x60;, &#x60;krw&#x60;, &#x60;eth&#x60;, &#x60;gbp&#x60;) (optional)
     * @param  bool|null $historical &#x60;true&#x60; if you want to use historical prices, &#x60;false&#x60; to use current price (optional, default to false)
     * @param  string|null $delimiter Column delimiter (&#x60;comma&#x60;, &#x60;semicolon&#x60;) (optional, default to 'comma')
     * @param  string|null $separator Decimal separator (&#x60;comma&#x60;, &#x60;point&#x60;) (optional, default to 'point')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceReport'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function accountsGetBalanceReport($address, $from = null, $to = null, $currency = null, $historical = false, $delimiter = 'comma', $separator = 'point', string $contentType = self::contentTypes['accountsGetBalanceReport'][0])
    {
        list($response) = $this->accountsGetBalanceReportWithHttpInfo($address, $from, $to, $currency, $historical, $delimiter, $separator, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetBalanceReportWithHttpInfo
     *
     * Get account report
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime|null $from Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31) (optional)
     * @param  \DateTime|null $to End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31) (optional)
     * @param  string|null $currency Currency to convert amounts to (&#x60;btc&#x60;, &#x60;eur&#x60;, &#x60;usd&#x60;, &#x60;cny&#x60;, &#x60;jpy&#x60;, &#x60;krw&#x60;, &#x60;eth&#x60;, &#x60;gbp&#x60;) (optional)
     * @param  bool|null $historical &#x60;true&#x60; if you want to use historical prices, &#x60;false&#x60; to use current price (optional, default to false)
     * @param  string|null $delimiter Column delimiter (&#x60;comma&#x60;, &#x60;semicolon&#x60;) (optional, default to 'comma')
     * @param  string|null $separator Decimal separator (&#x60;comma&#x60;, &#x60;point&#x60;) (optional, default to 'point')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceReport'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetBalanceReportWithHttpInfo($address, $from = null, $to = null, $currency = null, $historical = false, $delimiter = 'comma', $separator = 'point', string $contentType = self::contentTypes['accountsGetBalanceReport'][0])
    {
        $request = $this->accountsGetBalanceReportRequest($address, $from, $to, $currency, $historical, $delimiter, $separator, $contentType);

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
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
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

            $returnType = '\SplFileObject';
            if ($returnType === '\SplFileObject') {
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
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountsGetBalanceReportAsync
     *
     * Get account report
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime|null $from Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31) (optional)
     * @param  \DateTime|null $to End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31) (optional)
     * @param  string|null $currency Currency to convert amounts to (&#x60;btc&#x60;, &#x60;eur&#x60;, &#x60;usd&#x60;, &#x60;cny&#x60;, &#x60;jpy&#x60;, &#x60;krw&#x60;, &#x60;eth&#x60;, &#x60;gbp&#x60;) (optional)
     * @param  bool|null $historical &#x60;true&#x60; if you want to use historical prices, &#x60;false&#x60; to use current price (optional, default to false)
     * @param  string|null $delimiter Column delimiter (&#x60;comma&#x60;, &#x60;semicolon&#x60;) (optional, default to 'comma')
     * @param  string|null $separator Decimal separator (&#x60;comma&#x60;, &#x60;point&#x60;) (optional, default to 'point')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceReportAsync($address, $from = null, $to = null, $currency = null, $historical = false, $delimiter = 'comma', $separator = 'point', string $contentType = self::contentTypes['accountsGetBalanceReport'][0])
    {
        return $this->accountsGetBalanceReportAsyncWithHttpInfo($address, $from, $to, $currency, $historical, $delimiter, $separator, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetBalanceReportAsyncWithHttpInfo
     *
     * Get account report
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime|null $from Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31) (optional)
     * @param  \DateTime|null $to End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31) (optional)
     * @param  string|null $currency Currency to convert amounts to (&#x60;btc&#x60;, &#x60;eur&#x60;, &#x60;usd&#x60;, &#x60;cny&#x60;, &#x60;jpy&#x60;, &#x60;krw&#x60;, &#x60;eth&#x60;, &#x60;gbp&#x60;) (optional)
     * @param  bool|null $historical &#x60;true&#x60; if you want to use historical prices, &#x60;false&#x60; to use current price (optional, default to false)
     * @param  string|null $delimiter Column delimiter (&#x60;comma&#x60;, &#x60;semicolon&#x60;) (optional, default to 'comma')
     * @param  string|null $separator Decimal separator (&#x60;comma&#x60;, &#x60;point&#x60;) (optional, default to 'point')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetBalanceReportAsyncWithHttpInfo($address, $from = null, $to = null, $currency = null, $historical = false, $delimiter = 'comma', $separator = 'point', string $contentType = self::contentTypes['accountsGetBalanceReport'][0])
    {
        $returnType = '\SplFileObject';
        $request = $this->accountsGetBalanceReportRequest($address, $from, $to, $currency, $historical, $delimiter, $separator, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetBalanceReport'
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \DateTime|null $from Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31) (optional)
     * @param  \DateTime|null $to End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31) (optional)
     * @param  string|null $currency Currency to convert amounts to (&#x60;btc&#x60;, &#x60;eur&#x60;, &#x60;usd&#x60;, &#x60;cny&#x60;, &#x60;jpy&#x60;, &#x60;krw&#x60;, &#x60;eth&#x60;, &#x60;gbp&#x60;) (optional)
     * @param  bool|null $historical &#x60;true&#x60; if you want to use historical prices, &#x60;false&#x60; to use current price (optional, default to false)
     * @param  string|null $delimiter Column delimiter (&#x60;comma&#x60;, &#x60;semicolon&#x60;) (optional, default to 'comma')
     * @param  string|null $separator Decimal separator (&#x60;comma&#x60;, &#x60;point&#x60;) (optional, default to 'point')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetBalanceReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetBalanceReportRequest($address, $from = null, $to = null, $currency = null, $historical = false, $delimiter = 'comma', $separator = 'point', string $contentType = self::contentTypes['accountsGetBalanceReport'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetBalanceReport'
            );
        }








        $resourcePath = '/v1/accounts/{address}/report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $from,
            'from', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to,
            'to', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $currency,
            'currency', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $historical,
            'historical', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delimiter,
            'delimiter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $separator,
            'separator', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
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
     * Operation accountsGetByAddress
     *
     * Get account by address
     *
     * @param  string $address Account address (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing smooth migration. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetByAddress'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Tzkt\Model\Account
     */
    public function accountsGetByAddress($address, $legacy = true, string $contentType = self::contentTypes['accountsGetByAddress'][0])
    {
        list($response) = $this->accountsGetByAddressWithHttpInfo($address, $legacy, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetByAddressWithHttpInfo
     *
     * Get account by address
     *
     * @param  string $address Account address (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing smooth migration. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetByAddress'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Tzkt\Model\Account, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetByAddressWithHttpInfo($address, $legacy = true, string $contentType = self::contentTypes['accountsGetByAddress'][0])
    {
        $request = $this->accountsGetByAddressRequest($address, $legacy, $contentType);

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
                    if ('\Tzkt\Model\Account' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Account' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Account', []),
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

            $returnType = '\Tzkt\Model\Account';
            if ($returnType === '\SplFileObject') {
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
                        '\Tzkt\Model\Account',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountsGetByAddressAsync
     *
     * Get account by address
     *
     * @param  string $address Account address (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing smooth migration. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetByAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetByAddressAsync($address, $legacy = true, string $contentType = self::contentTypes['accountsGetByAddress'][0])
    {
        return $this->accountsGetByAddressAsyncWithHttpInfo($address, $legacy, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetByAddressAsyncWithHttpInfo
     *
     * Get account by address
     *
     * @param  string $address Account address (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing smooth migration. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetByAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetByAddressAsyncWithHttpInfo($address, $legacy = true, string $contentType = self::contentTypes['accountsGetByAddress'][0])
    {
        $returnType = '\Tzkt\Model\Account';
        $request = $this->accountsGetByAddressRequest($address, $legacy, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetByAddress'
     *
     * @param  string $address Account address (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing smooth migration. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetByAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetByAddressRequest($address, $legacy = true, string $contentType = self::contentTypes['accountsGetByAddress'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetByAddress'
            );
        }



        $resourcePath = '/v1/accounts/{address}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $legacy,
            'legacy', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation accountsGetContracts
     *
     * Get account contracts
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts contracts by specified field. Supported fields: &#x60;id&#x60; (default, desc), &#x60;balance&#x60;, &#x60;creationLevel&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetContracts'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Tzkt\Model\RelatedContract[]
     */
    public function accountsGetContracts($address, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetContracts'][0])
    {
        list($response) = $this->accountsGetContractsWithHttpInfo($address, $sort, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetContractsWithHttpInfo
     *
     * Get account contracts
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts contracts by specified field. Supported fields: &#x60;id&#x60; (default, desc), &#x60;balance&#x60;, &#x60;creationLevel&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetContracts'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Tzkt\Model\RelatedContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetContractsWithHttpInfo($address, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetContracts'][0])
    {
        $request = $this->accountsGetContractsRequest($address, $sort, $offset, $limit, $contentType);

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
                    if ('\Tzkt\Model\RelatedContract[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\RelatedContract[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\RelatedContract[]', []),
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

            $returnType = '\Tzkt\Model\RelatedContract[]';
            if ($returnType === '\SplFileObject') {
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
                        '\Tzkt\Model\RelatedContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountsGetContractsAsync
     *
     * Get account contracts
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts contracts by specified field. Supported fields: &#x60;id&#x60; (default, desc), &#x60;balance&#x60;, &#x60;creationLevel&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetContracts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetContractsAsync($address, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetContracts'][0])
    {
        return $this->accountsGetContractsAsyncWithHttpInfo($address, $sort, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetContractsAsyncWithHttpInfo
     *
     * Get account contracts
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts contracts by specified field. Supported fields: &#x60;id&#x60; (default, desc), &#x60;balance&#x60;, &#x60;creationLevel&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetContracts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetContractsAsyncWithHttpInfo($address, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetContracts'][0])
    {
        $returnType = '\Tzkt\Model\RelatedContract[]';
        $request = $this->accountsGetContractsRequest($address, $sort, $offset, $limit, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetContracts'
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts contracts by specified field. Supported fields: &#x60;id&#x60; (default, desc), &#x60;balance&#x60;, &#x60;creationLevel&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetContracts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetContractsRequest($address, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetContracts'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetContracts'
            );
        }



        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGetContracts, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGetContracts, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/accounts/{address}/contracts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation accountsGetCount
     *
     * Get accounts count
     *
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filters accounts by first activity level (where the account was created) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCount'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return int
     */
    public function accountsGetCount($type = null, $kind = null, $balance = null, $staked = null, $first_activity = null, string $contentType = self::contentTypes['accountsGetCount'][0])
    {
        list($response) = $this->accountsGetCountWithHttpInfo($type, $kind, $balance, $staked, $first_activity, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetCountWithHttpInfo
     *
     * Get accounts count
     *
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filters accounts by first activity level (where the account was created) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCount'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetCountWithHttpInfo($type = null, $kind = null, $balance = null, $staked = null, $first_activity = null, string $contentType = self::contentTypes['accountsGetCount'][0])
    {
        $request = $this->accountsGetCountRequest($type, $kind, $balance, $staked, $first_activity, $contentType);

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
                    if ('int' === '\SplFileObject') {
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
            if ($returnType === '\SplFileObject') {
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
     * Operation accountsGetCountAsync
     *
     * Get accounts count
     *
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filters accounts by first activity level (where the account was created) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetCountAsync($type = null, $kind = null, $balance = null, $staked = null, $first_activity = null, string $contentType = self::contentTypes['accountsGetCount'][0])
    {
        return $this->accountsGetCountAsyncWithHttpInfo($type, $kind, $balance, $staked, $first_activity, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetCountAsyncWithHttpInfo
     *
     * Get accounts count
     *
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filters accounts by first activity level (where the account was created) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetCountAsyncWithHttpInfo($type = null, $kind = null, $balance = null, $staked = null, $first_activity = null, string $contentType = self::contentTypes['accountsGetCount'][0])
    {
        $returnType = 'int';
        $request = $this->accountsGetCountRequest($type, $kind, $balance, $staked, $first_activity, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetCount'
     *
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters accounts by balance (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $staked Filters accounts by participation in staking (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filters accounts by first activity level (where the account was created) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetCountRequest($type = null, $kind = null, $balance = null, $staked = null, $first_activity = null, string $contentType = self::contentTypes['accountsGetCount'][0])
    {







        $resourcePath = '/v1/accounts/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            '\Tzkt\Model\AccountTypeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $kind,
            'kind', // param base name
            '\Tzkt\Model\ContractKindParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $staked,
            'staked', // param base name
            '\Tzkt\Model\BoolParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity,
            'firstActivity', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
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
     * Operation accountsGetCounter
     *
     * Get counter
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCounter'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return int
     */
    public function accountsGetCounter($address, string $contentType = self::contentTypes['accountsGetCounter'][0])
    {
        list($response) = $this->accountsGetCounterWithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetCounterWithHttpInfo
     *
     * Get counter
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCounter'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetCounterWithHttpInfo($address, string $contentType = self::contentTypes['accountsGetCounter'][0])
    {
        $request = $this->accountsGetCounterRequest($address, $contentType);

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
                    if ('int' === '\SplFileObject') {
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
            if ($returnType === '\SplFileObject') {
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
     * Operation accountsGetCounterAsync
     *
     * Get counter
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCounter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetCounterAsync($address, string $contentType = self::contentTypes['accountsGetCounter'][0])
    {
        return $this->accountsGetCounterAsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetCounterAsyncWithHttpInfo
     *
     * Get counter
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCounter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetCounterAsyncWithHttpInfo($address, string $contentType = self::contentTypes['accountsGetCounter'][0])
    {
        $returnType = 'int';
        $request = $this->accountsGetCounterRequest($address, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetCounter'
     *
     * @param  string $address Account address (starting with tz or KT) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetCounter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetCounterRequest($address, string $contentType = self::contentTypes['accountsGetCounter'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetCounter'
            );
        }


        $resourcePath = '/v1/accounts/{address}/counter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation accountsGetDelegators
     *
     * Get account delegators
     *
     * @param  string $address Account address (starting with tz) (required)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters delegators by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters delegators by balance. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $delegation_level Number of items to skip (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;delegationLevel&#x60; (default, desc), &#x60;balance&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetDelegators'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Tzkt\Model\Delegator[]
     */
    public function accountsGetDelegators($address, $type = null, $balance = null, $delegation_level = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetDelegators'][0])
    {
        list($response) = $this->accountsGetDelegatorsWithHttpInfo($address, $type, $balance, $delegation_level, $sort, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetDelegatorsWithHttpInfo
     *
     * Get account delegators
     *
     * @param  string $address Account address (starting with tz) (required)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters delegators by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters delegators by balance. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $delegation_level Number of items to skip (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;delegationLevel&#x60; (default, desc), &#x60;balance&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetDelegators'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Tzkt\Model\Delegator[], HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetDelegatorsWithHttpInfo($address, $type = null, $balance = null, $delegation_level = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetDelegators'][0])
    {
        $request = $this->accountsGetDelegatorsRequest($address, $type, $balance, $delegation_level, $sort, $offset, $limit, $contentType);

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
                    if ('\Tzkt\Model\Delegator[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Delegator[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Delegator[]', []),
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

            $returnType = '\Tzkt\Model\Delegator[]';
            if ($returnType === '\SplFileObject') {
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
                        '\Tzkt\Model\Delegator[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountsGetDelegatorsAsync
     *
     * Get account delegators
     *
     * @param  string $address Account address (starting with tz) (required)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters delegators by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters delegators by balance. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $delegation_level Number of items to skip (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;delegationLevel&#x60; (default, desc), &#x60;balance&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetDelegators'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetDelegatorsAsync($address, $type = null, $balance = null, $delegation_level = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetDelegators'][0])
    {
        return $this->accountsGetDelegatorsAsyncWithHttpInfo($address, $type, $balance, $delegation_level, $sort, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetDelegatorsAsyncWithHttpInfo
     *
     * Get account delegators
     *
     * @param  string $address Account address (starting with tz) (required)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters delegators by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters delegators by balance. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $delegation_level Number of items to skip (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;delegationLevel&#x60; (default, desc), &#x60;balance&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetDelegators'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetDelegatorsAsyncWithHttpInfo($address, $type = null, $balance = null, $delegation_level = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetDelegators'][0])
    {
        $returnType = '\Tzkt\Model\Delegator[]';
        $request = $this->accountsGetDelegatorsRequest($address, $type, $balance, $delegation_level, $sort, $offset, $limit, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetDelegators'
     *
     * @param  string $address Account address (starting with tz) (required)
     * @param  \Tzkt\Model\AccountsGetTypeParameter|null $type Filters delegators by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;, &#x60;rollup&#x60;, &#x60;smart_rollup&#x60;, &#x60;ghost&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filters delegators by balance. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $delegation_level Number of items to skip (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;delegationLevel&#x60; (default, desc), &#x60;balance&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetDelegators'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetDelegatorsRequest($address, $type = null, $balance = null, $delegation_level = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['accountsGetDelegators'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetDelegators'
            );
        }






        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGetDelegators, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGetDelegators, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/accounts/{address}/delegators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            '\Tzkt\Model\AccountTypeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delegation_level,
            'delegationLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
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


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation accountsGetOperations
     *
     * Get account operations
     *
     * @param  string $address Account address (required)
     * @param  string|null $type Comma separated list of operation types to return (&#x60;endorsement&#x60;, &#x60;preendorsement&#x60;, &#x60;ballot&#x60;, &#x60;proposal&#x60;, &#x60;activation&#x60;, &#x60;double_baking&#x60;,             &#x60;double_endorsing&#x60;, &#x60;double_preendorsing&#x60;, &#x60;nonce_revelation&#x60;, &#x60;vdf_revelation&#x60;, &#x60;delegation&#x60;, &#x60;origination&#x60;, &#x60;transaction&#x60;, &#x60;reveal&#x60;, &#x60;register_constant&#x60;,             &#x60;set_deposits_limit&#x60;, &#x60;increase_paid_storage&#x60;, &#x60;tx_rollup_origination&#x60;, &#x60;tx_rollup_submit_batch&#x60;, &#x60;tx_rollup_commit&#x60;, &#x60;tx_rollup_return_bond&#x60;,             &#x60;tx_rollup_finalize_commitment&#x60;, &#x60;tx_rollup_remove_commitment&#x60;, &#x60;tx_rollup_rejection&#x60;, &#x60;tx_rollup_dispatch_tickets&#x60;, &#x60;transfer_ticket&#x60;, &#x60;migration&#x60;,             &#x60;update_consensus_key&#x60;, &#x60;drain_delegate&#x60;, &#x60;sr_add_messages&#x60;, &#x60;sr_cement&#x60;, &#x60;sr_execute&#x60;, &#x60;sr_originate&#x60;, &#x60;sr_publish&#x60;, &#x60;sr_recover_bond&#x60;, &#x60;sr_refute&#x60;,             &#x60;revelation_penalty&#x60;, &#x60;baking&#x60;, &#x60;endorsing_reward&#x60;). If not specified then the default set will be returned. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filters transactions, delegations and originations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $sender Filters transactions, delegations, originations, reveals and seed nonce revelations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $target Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $prev_delegate Filters delegations by prev delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $new_delegate Filters delegations by new delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_manager Filters origination operations by manager. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_delegate Filters origination operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $originated_contract Filters origination operations by originated contract. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $accuser Filters double baking and double endorsing by accuser. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $offender Filters double baking and double endorsing by offender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filters seed nonce revelation operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters operations by level. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $timestamp Filters operations by timestamp. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $entrypoint Filters transactions by entrypoint called on the target contract. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $parameter Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $has_internals Filters transactions by presence of internal operations. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsStatusParameter|null $status Filters transactions, delegations, originations and reveals by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsSortParameter|null $sort Sort mode (0 - ascending, 1 - descending), operations of different types can only be sorted by ID. (optional)
     * @param  int|null $last_id Id of the last operation received, which is used as an offset for pagination (optional)
     * @param  int|null $limit Number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetOperations'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Tzkt\Model\Operation[]
     */
    public function accountsGetOperations($address, $type = null, $initiator = null, $sender = null, $target = null, $prev_delegate = null, $new_delegate = null, $contract_manager = null, $contract_delegate = null, $originated_contract = null, $accuser = null, $offender = null, $baker = null, $level = null, $timestamp = null, $entrypoint = null, $parameter = null, $has_internals = null, $status = null, $sort = null, $last_id = null, $limit = 100, $micheline = null, $quote = null, string $contentType = self::contentTypes['accountsGetOperations'][0])
    {
        list($response) = $this->accountsGetOperationsWithHttpInfo($address, $type, $initiator, $sender, $target, $prev_delegate, $new_delegate, $contract_manager, $contract_delegate, $originated_contract, $accuser, $offender, $baker, $level, $timestamp, $entrypoint, $parameter, $has_internals, $status, $sort, $last_id, $limit, $micheline, $quote, $contentType);
        return $response;
    }

    /**
     * Operation accountsGetOperationsWithHttpInfo
     *
     * Get account operations
     *
     * @param  string $address Account address (required)
     * @param  string|null $type Comma separated list of operation types to return (&#x60;endorsement&#x60;, &#x60;preendorsement&#x60;, &#x60;ballot&#x60;, &#x60;proposal&#x60;, &#x60;activation&#x60;, &#x60;double_baking&#x60;,             &#x60;double_endorsing&#x60;, &#x60;double_preendorsing&#x60;, &#x60;nonce_revelation&#x60;, &#x60;vdf_revelation&#x60;, &#x60;delegation&#x60;, &#x60;origination&#x60;, &#x60;transaction&#x60;, &#x60;reveal&#x60;, &#x60;register_constant&#x60;,             &#x60;set_deposits_limit&#x60;, &#x60;increase_paid_storage&#x60;, &#x60;tx_rollup_origination&#x60;, &#x60;tx_rollup_submit_batch&#x60;, &#x60;tx_rollup_commit&#x60;, &#x60;tx_rollup_return_bond&#x60;,             &#x60;tx_rollup_finalize_commitment&#x60;, &#x60;tx_rollup_remove_commitment&#x60;, &#x60;tx_rollup_rejection&#x60;, &#x60;tx_rollup_dispatch_tickets&#x60;, &#x60;transfer_ticket&#x60;, &#x60;migration&#x60;,             &#x60;update_consensus_key&#x60;, &#x60;drain_delegate&#x60;, &#x60;sr_add_messages&#x60;, &#x60;sr_cement&#x60;, &#x60;sr_execute&#x60;, &#x60;sr_originate&#x60;, &#x60;sr_publish&#x60;, &#x60;sr_recover_bond&#x60;, &#x60;sr_refute&#x60;,             &#x60;revelation_penalty&#x60;, &#x60;baking&#x60;, &#x60;endorsing_reward&#x60;). If not specified then the default set will be returned. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filters transactions, delegations and originations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $sender Filters transactions, delegations, originations, reveals and seed nonce revelations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $target Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $prev_delegate Filters delegations by prev delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $new_delegate Filters delegations by new delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_manager Filters origination operations by manager. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_delegate Filters origination operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $originated_contract Filters origination operations by originated contract. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $accuser Filters double baking and double endorsing by accuser. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $offender Filters double baking and double endorsing by offender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filters seed nonce revelation operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters operations by level. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $timestamp Filters operations by timestamp. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $entrypoint Filters transactions by entrypoint called on the target contract. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $parameter Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $has_internals Filters transactions by presence of internal operations. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsStatusParameter|null $status Filters transactions, delegations, originations and reveals by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsSortParameter|null $sort Sort mode (0 - ascending, 1 - descending), operations of different types can only be sorted by ID. (optional)
     * @param  int|null $last_id Id of the last operation received, which is used as an offset for pagination (optional)
     * @param  int|null $limit Number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetOperations'] to see the possible values for this operation
     *
     * @throws \Tzkt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Tzkt\Model\Operation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function accountsGetOperationsWithHttpInfo($address, $type = null, $initiator = null, $sender = null, $target = null, $prev_delegate = null, $new_delegate = null, $contract_manager = null, $contract_delegate = null, $originated_contract = null, $accuser = null, $offender = null, $baker = null, $level = null, $timestamp = null, $entrypoint = null, $parameter = null, $has_internals = null, $status = null, $sort = null, $last_id = null, $limit = 100, $micheline = null, $quote = null, string $contentType = self::contentTypes['accountsGetOperations'][0])
    {
        $request = $this->accountsGetOperationsRequest($address, $type, $initiator, $sender, $target, $prev_delegate, $new_delegate, $contract_manager, $contract_delegate, $originated_contract, $accuser, $offender, $baker, $level, $timestamp, $entrypoint, $parameter, $has_internals, $status, $sort, $last_id, $limit, $micheline, $quote, $contentType);

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
                    if ('\Tzkt\Model\Operation[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Operation[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Operation[]', []),
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

            $returnType = '\Tzkt\Model\Operation[]';
            if ($returnType === '\SplFileObject') {
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
                        '\Tzkt\Model\Operation[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountsGetOperationsAsync
     *
     * Get account operations
     *
     * @param  string $address Account address (required)
     * @param  string|null $type Comma separated list of operation types to return (&#x60;endorsement&#x60;, &#x60;preendorsement&#x60;, &#x60;ballot&#x60;, &#x60;proposal&#x60;, &#x60;activation&#x60;, &#x60;double_baking&#x60;,             &#x60;double_endorsing&#x60;, &#x60;double_preendorsing&#x60;, &#x60;nonce_revelation&#x60;, &#x60;vdf_revelation&#x60;, &#x60;delegation&#x60;, &#x60;origination&#x60;, &#x60;transaction&#x60;, &#x60;reveal&#x60;, &#x60;register_constant&#x60;,             &#x60;set_deposits_limit&#x60;, &#x60;increase_paid_storage&#x60;, &#x60;tx_rollup_origination&#x60;, &#x60;tx_rollup_submit_batch&#x60;, &#x60;tx_rollup_commit&#x60;, &#x60;tx_rollup_return_bond&#x60;,             &#x60;tx_rollup_finalize_commitment&#x60;, &#x60;tx_rollup_remove_commitment&#x60;, &#x60;tx_rollup_rejection&#x60;, &#x60;tx_rollup_dispatch_tickets&#x60;, &#x60;transfer_ticket&#x60;, &#x60;migration&#x60;,             &#x60;update_consensus_key&#x60;, &#x60;drain_delegate&#x60;, &#x60;sr_add_messages&#x60;, &#x60;sr_cement&#x60;, &#x60;sr_execute&#x60;, &#x60;sr_originate&#x60;, &#x60;sr_publish&#x60;, &#x60;sr_recover_bond&#x60;, &#x60;sr_refute&#x60;,             &#x60;revelation_penalty&#x60;, &#x60;baking&#x60;, &#x60;endorsing_reward&#x60;). If not specified then the default set will be returned. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filters transactions, delegations and originations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $sender Filters transactions, delegations, originations, reveals and seed nonce revelations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $target Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $prev_delegate Filters delegations by prev delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $new_delegate Filters delegations by new delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_manager Filters origination operations by manager. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_delegate Filters origination operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $originated_contract Filters origination operations by originated contract. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $accuser Filters double baking and double endorsing by accuser. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $offender Filters double baking and double endorsing by offender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filters seed nonce revelation operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters operations by level. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $timestamp Filters operations by timestamp. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $entrypoint Filters transactions by entrypoint called on the target contract. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $parameter Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $has_internals Filters transactions by presence of internal operations. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsStatusParameter|null $status Filters transactions, delegations, originations and reveals by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsSortParameter|null $sort Sort mode (0 - ascending, 1 - descending), operations of different types can only be sorted by ID. (optional)
     * @param  int|null $last_id Id of the last operation received, which is used as an offset for pagination (optional)
     * @param  int|null $limit Number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetOperations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetOperationsAsync($address, $type = null, $initiator = null, $sender = null, $target = null, $prev_delegate = null, $new_delegate = null, $contract_manager = null, $contract_delegate = null, $originated_contract = null, $accuser = null, $offender = null, $baker = null, $level = null, $timestamp = null, $entrypoint = null, $parameter = null, $has_internals = null, $status = null, $sort = null, $last_id = null, $limit = 100, $micheline = null, $quote = null, string $contentType = self::contentTypes['accountsGetOperations'][0])
    {
        return $this->accountsGetOperationsAsyncWithHttpInfo($address, $type, $initiator, $sender, $target, $prev_delegate, $new_delegate, $contract_manager, $contract_delegate, $originated_contract, $accuser, $offender, $baker, $level, $timestamp, $entrypoint, $parameter, $has_internals, $status, $sort, $last_id, $limit, $micheline, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountsGetOperationsAsyncWithHttpInfo
     *
     * Get account operations
     *
     * @param  string $address Account address (required)
     * @param  string|null $type Comma separated list of operation types to return (&#x60;endorsement&#x60;, &#x60;preendorsement&#x60;, &#x60;ballot&#x60;, &#x60;proposal&#x60;, &#x60;activation&#x60;, &#x60;double_baking&#x60;,             &#x60;double_endorsing&#x60;, &#x60;double_preendorsing&#x60;, &#x60;nonce_revelation&#x60;, &#x60;vdf_revelation&#x60;, &#x60;delegation&#x60;, &#x60;origination&#x60;, &#x60;transaction&#x60;, &#x60;reveal&#x60;, &#x60;register_constant&#x60;,             &#x60;set_deposits_limit&#x60;, &#x60;increase_paid_storage&#x60;, &#x60;tx_rollup_origination&#x60;, &#x60;tx_rollup_submit_batch&#x60;, &#x60;tx_rollup_commit&#x60;, &#x60;tx_rollup_return_bond&#x60;,             &#x60;tx_rollup_finalize_commitment&#x60;, &#x60;tx_rollup_remove_commitment&#x60;, &#x60;tx_rollup_rejection&#x60;, &#x60;tx_rollup_dispatch_tickets&#x60;, &#x60;transfer_ticket&#x60;, &#x60;migration&#x60;,             &#x60;update_consensus_key&#x60;, &#x60;drain_delegate&#x60;, &#x60;sr_add_messages&#x60;, &#x60;sr_cement&#x60;, &#x60;sr_execute&#x60;, &#x60;sr_originate&#x60;, &#x60;sr_publish&#x60;, &#x60;sr_recover_bond&#x60;, &#x60;sr_refute&#x60;,             &#x60;revelation_penalty&#x60;, &#x60;baking&#x60;, &#x60;endorsing_reward&#x60;). If not specified then the default set will be returned. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filters transactions, delegations and originations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $sender Filters transactions, delegations, originations, reveals and seed nonce revelations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $target Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $prev_delegate Filters delegations by prev delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $new_delegate Filters delegations by new delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_manager Filters origination operations by manager. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_delegate Filters origination operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $originated_contract Filters origination operations by originated contract. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $accuser Filters double baking and double endorsing by accuser. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $offender Filters double baking and double endorsing by offender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filters seed nonce revelation operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters operations by level. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $timestamp Filters operations by timestamp. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $entrypoint Filters transactions by entrypoint called on the target contract. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $parameter Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $has_internals Filters transactions by presence of internal operations. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsStatusParameter|null $status Filters transactions, delegations, originations and reveals by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsSortParameter|null $sort Sort mode (0 - ascending, 1 - descending), operations of different types can only be sorted by ID. (optional)
     * @param  int|null $last_id Id of the last operation received, which is used as an offset for pagination (optional)
     * @param  int|null $limit Number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetOperations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountsGetOperationsAsyncWithHttpInfo($address, $type = null, $initiator = null, $sender = null, $target = null, $prev_delegate = null, $new_delegate = null, $contract_manager = null, $contract_delegate = null, $originated_contract = null, $accuser = null, $offender = null, $baker = null, $level = null, $timestamp = null, $entrypoint = null, $parameter = null, $has_internals = null, $status = null, $sort = null, $last_id = null, $limit = 100, $micheline = null, $quote = null, string $contentType = self::contentTypes['accountsGetOperations'][0])
    {
        $returnType = '\Tzkt\Model\Operation[]';
        $request = $this->accountsGetOperationsRequest($address, $type, $initiator, $sender, $target, $prev_delegate, $new_delegate, $contract_manager, $contract_delegate, $originated_contract, $accuser, $offender, $baker, $level, $timestamp, $entrypoint, $parameter, $has_internals, $status, $sort, $last_id, $limit, $micheline, $quote, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'accountsGetOperations'
     *
     * @param  string $address Account address (required)
     * @param  string|null $type Comma separated list of operation types to return (&#x60;endorsement&#x60;, &#x60;preendorsement&#x60;, &#x60;ballot&#x60;, &#x60;proposal&#x60;, &#x60;activation&#x60;, &#x60;double_baking&#x60;,             &#x60;double_endorsing&#x60;, &#x60;double_preendorsing&#x60;, &#x60;nonce_revelation&#x60;, &#x60;vdf_revelation&#x60;, &#x60;delegation&#x60;, &#x60;origination&#x60;, &#x60;transaction&#x60;, &#x60;reveal&#x60;, &#x60;register_constant&#x60;,             &#x60;set_deposits_limit&#x60;, &#x60;increase_paid_storage&#x60;, &#x60;tx_rollup_origination&#x60;, &#x60;tx_rollup_submit_batch&#x60;, &#x60;tx_rollup_commit&#x60;, &#x60;tx_rollup_return_bond&#x60;,             &#x60;tx_rollup_finalize_commitment&#x60;, &#x60;tx_rollup_remove_commitment&#x60;, &#x60;tx_rollup_rejection&#x60;, &#x60;tx_rollup_dispatch_tickets&#x60;, &#x60;transfer_ticket&#x60;, &#x60;migration&#x60;,             &#x60;update_consensus_key&#x60;, &#x60;drain_delegate&#x60;, &#x60;sr_add_messages&#x60;, &#x60;sr_cement&#x60;, &#x60;sr_execute&#x60;, &#x60;sr_originate&#x60;, &#x60;sr_publish&#x60;, &#x60;sr_recover_bond&#x60;, &#x60;sr_refute&#x60;,             &#x60;revelation_penalty&#x60;, &#x60;baking&#x60;, &#x60;endorsing_reward&#x60;). If not specified then the default set will be returned. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filters transactions, delegations and originations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $sender Filters transactions, delegations, originations, reveals and seed nonce revelations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $target Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $prev_delegate Filters delegations by prev delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $new_delegate Filters delegations by new delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_manager Filters origination operations by manager. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract_delegate Filters origination operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $originated_contract Filters origination operations by originated contract. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $accuser Filters double baking and double endorsing by accuser. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $offender Filters double baking and double endorsing by offender. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $baker Filters seed nonce revelation operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters operations by level. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $timestamp Filters operations by timestamp. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $entrypoint Filters transactions by entrypoint called on the target contract. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $parameter Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $has_internals Filters transactions by presence of internal operations. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsStatusParameter|null $status Filters transactions, delegations, originations and reveals by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsSortParameter|null $sort Sort mode (0 - ascending, 1 - descending), operations of different types can only be sorted by ID. (optional)
     * @param  int|null $last_id Id of the last operation received, which is used as an offset for pagination (optional)
     * @param  int|null $limit Number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsQuoteParameter|null $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accountsGetOperations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountsGetOperationsRequest($address, $type = null, $initiator = null, $sender = null, $target = null, $prev_delegate = null, $new_delegate = null, $contract_manager = null, $contract_delegate = null, $originated_contract = null, $accuser = null, $offender = null, $baker = null, $level = null, $timestamp = null, $entrypoint = null, $parameter = null, $has_internals = null, $status = null, $sort = null, $last_id = null, $limit = 100, $micheline = null, $quote = null, string $contentType = self::contentTypes['accountsGetOperations'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling accountsGetOperations'
            );
        }





















        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGetOperations, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AccountsApi.accountsGetOperations, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/accounts/{address}/operations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $initiator,
            'initiator', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sender,
            'sender', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $target,
            'target', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $prev_delegate,
            'prevDelegate', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $new_delegate,
            'newDelegate', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contract_manager,
            'contractManager', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contract_delegate,
            'contractDelegate', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $originated_contract,
            'originatedContract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $accuser,
            'accuser', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offender,
            'offender', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
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
            '\Tzkt\Model\DateTimeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $entrypoint,
            'entrypoint', // param base name
            '\Tzkt\Model\StringParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $parameter,
            'parameter', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $has_internals,
            'hasInternals', // param base name
            '\Tzkt\Model\BoolParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            '\Tzkt\Model\OperationStatusParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortMode', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_id,
            'lastId', // param base name
            'integer', // openApiType
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
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $quote,
            'quote', // param base name
            '\Tzkt\Model\Symbols', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
    protected function createHttpClientOption()
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
