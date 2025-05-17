<?php
/**
 * TokensApi
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
 * TokensApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TokensApi
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
        'tokensGetTokenBalances' => [
            'application/json',
        ],
        'tokensGetTokenBalances2' => [
            'application/json',
        ],
        'tokensGetTokenBalancesCount' => [
            'application/json',
        ],
        'tokensGetTokenTransfers' => [
            'application/json',
        ],
        'tokensGetTokenTransfersCount' => [
            'application/json',
        ],
        'tokensGetTokens' => [
            'application/json',
        ],
        'tokensGetTokensCount' => [
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
     * Operation tokensGetTokenBalances
     *
     * Get token balances
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\TokenBalance[]
     */
    public function tokensGetTokenBalances(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances'][0]
    ): array
    {
        list($response) = $this->tokensGetTokenBalancesWithHttpInfo($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenBalancesWithHttpInfo
     *
     * Get token balances
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\TokenBalance[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenBalancesWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances'][0]
    ): array
    {
        $request = $this->tokensGetTokenBalancesRequest($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\TokenBalance[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\TokenBalance[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\TokenBalance[]', []),
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

            $returnType = '\Tzkt\Model\TokenBalance[]';
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
                        '\Tzkt\Model\TokenBalance[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tokensGetTokenBalancesAsync
     *
     * Get token balances
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenBalancesAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances'][0]
    ): PromiseInterface
    {
        return $this->tokensGetTokenBalancesAsyncWithHttpInfo($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenBalancesAsyncWithHttpInfo
     *
     * Get token balances
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenBalancesAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\TokenBalance[]';
        $request = $this->tokensGetTokenBalancesRequest($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'tokensGetTokenBalances'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenBalancesRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances'][0]
    ): Request
    {
















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenBalances, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenBalances, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tokens/balances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'token.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            '\Tzkt\Model\TokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
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
            $indexed_at,
            'indexedAt', // param base name
            '\Tzkt\Model\Int32NullParameter', // openApiType
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
     * Operation tokensGetTokenBalances2
     *
     * Get historical token balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\TokenBalanceShort[]
     */
    public function tokensGetTokenBalances2(
        int $level,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances2'][0]
    ): array
    {
        list($response) = $this->tokensGetTokenBalances2WithHttpInfo($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenBalances2WithHttpInfo
     *
     * Get historical token balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\TokenBalanceShort[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenBalances2WithHttpInfo(
        int $level,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances2'][0]
    ): array
    {
        $request = $this->tokensGetTokenBalances2Request($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\TokenBalanceShort[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\TokenBalanceShort[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\TokenBalanceShort[]', []),
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

            $returnType = '\Tzkt\Model\TokenBalanceShort[]';
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
                        '\Tzkt\Model\TokenBalanceShort[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tokensGetTokenBalances2Async
     *
     * Get historical token balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenBalances2Async(
        int $level,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances2'][0]
    ): PromiseInterface
    {
        return $this->tokensGetTokenBalances2AsyncWithHttpInfo($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenBalances2AsyncWithHttpInfo
     *
     * Get historical token balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenBalances2AsyncWithHttpInfo(
        int $level,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances2'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\TokenBalanceShort[]';
        $request = $this->tokensGetTokenBalances2Request($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'tokensGetTokenBalances2'
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenBalances2Request(
        int $level,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenBalances2'][0]
    ): Request
    {

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $level when calling tokensGetTokenBalances2'
            );
        }










        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenBalances2, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenBalances2, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tokens/historical_balances/{level}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'token.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            '\Tzkt\Model\TokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
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
     * Operation tokensGetTokenBalancesCount
     *
     * Get token balances count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function tokensGetTokenBalancesCount(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0]
    ): int
    {
        list($response) = $this->tokensGetTokenBalancesCountWithHttpInfo($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenBalancesCountWithHttpInfo
     *
     * Get token balances count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenBalancesCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0]
    ): array
    {
        $request = $this->tokensGetTokenBalancesCountRequest($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $contentType);

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
     * Operation tokensGetTokenBalancesCountAsync
     *
     * Get token balances count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenBalancesCountAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0]
    ): PromiseInterface
    {
        return $this->tokensGetTokenBalancesCountAsyncWithHttpInfo($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenBalancesCountAsyncWithHttpInfo
     *
     * Get token balances count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenBalancesCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->tokensGetTokenBalancesCountRequest($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $contentType);

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
     * Create request for operation 'tokensGetTokenBalancesCount'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenBalancesCountRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0]
    ): Request
    {















        $resourcePath = '/v1/tokens/balances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'token.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            '\Tzkt\Model\TokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
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
            $indexed_at,
            'indexedAt', // param base name
            '\Tzkt\Model\Int32NullParameter', // openApiType
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
     * Operation tokensGetTokenTransfers
     *
     * Get token transfers
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\TokenTransfer[]
     */
    public function tokensGetTokenTransfers(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfers'][0]
    ): array
    {
        list($response) = $this->tokensGetTokenTransfersWithHttpInfo($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenTransfersWithHttpInfo
     *
     * Get token transfers
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\TokenTransfer[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenTransfersWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfers'][0]
    ): array
    {
        $request = $this->tokensGetTokenTransfersRequest($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\TokenTransfer[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\TokenTransfer[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\TokenTransfer[]', []),
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

            $returnType = '\Tzkt\Model\TokenTransfer[]';
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
                        '\Tzkt\Model\TokenTransfer[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tokensGetTokenTransfersAsync
     *
     * Get token transfers
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenTransfersAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfers'][0]
    ): PromiseInterface
    {
        return $this->tokensGetTokenTransfersAsyncWithHttpInfo($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenTransfersAsyncWithHttpInfo
     *
     * Get token transfers
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenTransfersAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfers'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\TokenTransfer[]';
        $request = $this->tokensGetTokenTransfersRequest($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'tokensGetTokenTransfers'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenTransfersRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfers'][0]
    ): Request
    {



















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenTransfers, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenTransfers, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tokens/transfers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
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
            $token_id,
            'token.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            '\Tzkt\Model\TokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $anyof,
            'anyof', // param base name
            '\Tzkt\Model\AnyOfParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $from,
            'from', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to,
            'to', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount,
            'amount', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transaction_id,
            'transactionId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $origination_id,
            'originationId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $migration_id,
            'migrationId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $indexed_at,
            'indexedAt', // param base name
            '\Tzkt\Model\Int32NullParameter', // openApiType
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
     * Operation tokensGetTokenTransfersCount
     *
     * Get token transfers count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function tokensGetTokenTransfersCount(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0]
    ): int
    {
        list($response) = $this->tokensGetTokenTransfersCountWithHttpInfo($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenTransfersCountWithHttpInfo
     *
     * Get token transfers count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenTransfersCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0]
    ): array
    {
        $request = $this->tokensGetTokenTransfersCountRequest($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $contentType);

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
     * Operation tokensGetTokenTransfersCountAsync
     *
     * Get token transfers count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenTransfersCountAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0]
    ): PromiseInterface
    {
        return $this->tokensGetTokenTransfersCountAsyncWithHttpInfo($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenTransfersCountAsyncWithHttpInfo
     *
     * Get token transfers count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokenTransfersCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->tokensGetTokenTransfersCountRequest($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $contentType);

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
     * Create request for operation 'tokensGetTokenTransfersCount'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenTransfersCountRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $token_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $token_contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $token_standard = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $token_metadata = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0]
    ): Request
    {


















        $resourcePath = '/v1/tokens/transfers/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
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
            $token_id,
            'token.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            '\Tzkt\Model\TokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $anyof,
            'anyof', // param base name
            '\Tzkt\Model\AnyOfParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $from,
            'from', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to,
            'to', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount,
            'amount', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transaction_id,
            'transactionId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $origination_id,
            'originationId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $migration_id,
            'migrationId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $indexed_at,
            'indexedAt', // param base name
            '\Tzkt\Model\Int32NullParameter', // openApiType
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
     * Operation tokensGetTokens
     *
     * Get tokens
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Token[]
     */
    public function tokensGetTokens(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokens'][0]
    ): array
    {
        list($response) = $this->tokensGetTokensWithHttpInfo($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokensWithHttpInfo
     *
     * Get tokens
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Token[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokensWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokens'][0]
    ): array
    {
        $request = $this->tokensGetTokensRequest($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\Token[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Token[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Token[]', []),
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

            $returnType = '\Tzkt\Model\Token[]';
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
                        '\Tzkt\Model\Token[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tokensGetTokensAsync
     *
     * Get tokens
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokensAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokens'][0]
    ): PromiseInterface
    {
        return $this->tokensGetTokensAsyncWithHttpInfo($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokensAsyncWithHttpInfo
     *
     * Get tokens
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokensAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokens'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Token[]';
        $request = $this->tokensGetTokensRequest($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'tokensGetTokens'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokensRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['tokensGetTokens'][0]
    ): Request
    {














        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokens, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokens, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tokens';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contract,
            'contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'tokenId', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $standard,
            'standard', // param base name
            '\Tzkt\Model\TokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_minter,
            'firstMinter', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
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
            $metadata,
            'metadata', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $indexed_at,
            'indexedAt', // param base name
            '\Tzkt\Model\Int32NullParameter', // openApiType
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
     * Operation tokensGetTokensCount
     *
     * Get tokens count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function tokensGetTokensCount(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokensCount'][0]
    ): int
    {
        list($response) = $this->tokensGetTokensCountWithHttpInfo($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokensCountWithHttpInfo
     *
     * Get tokens count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokensCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokensCount'][0]
    ): array
    {
        $request = $this->tokensGetTokensCountRequest($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $contentType);

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
     * Operation tokensGetTokensCountAsync
     *
     * Get tokens count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokensCountAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokensCount'][0]
    ): PromiseInterface
    {
        return $this->tokensGetTokensCountAsyncWithHttpInfo($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokensCountAsyncWithHttpInfo
     *
     * Get tokens count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tokensGetTokensCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokensCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->tokensGetTokensCountRequest($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $contentType);

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
     * Create request for operation 'tokensGetTokensCount'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TokensGetTokensCountStandardParameter|null $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\CommitmentsGetAllActivationLevelParameter|null $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokensCountRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $token_id = null,
        ?\Tzkt\Model\TokensGetTokensCountStandardParameter $standard = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $metadata = null,
        ?\Tzkt\Model\CommitmentsGetAllActivationLevelParameter $indexed_at = null,
        string $contentType = self::contentTypes['tokensGetTokensCount'][0]
    ): Request
    {













        $resourcePath = '/v1/tokens/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contract,
            'contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'tokenId', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $standard,
            'standard', // param base name
            '\Tzkt\Model\TokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_minter,
            'firstMinter', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
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
            $metadata,
            'metadata', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $indexed_at,
            'indexedAt', // param base name
            '\Tzkt\Model\Int32NullParameter', // openApiType
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
