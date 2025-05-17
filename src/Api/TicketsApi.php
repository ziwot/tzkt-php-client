<?php
/**
 * TicketsApi
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
 * TicketsApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TicketsApi
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
        'ticketsGetHistoricalTicketBalances' => [
            'application/json',
        ],
        'ticketsGetTicketBalances' => [
            'application/json',
        ],
        'ticketsGetTicketBalancesCount' => [
            'application/json',
        ],
        'ticketsGetTicketTransfers' => [
            'application/json',
        ],
        'ticketsGetTicketTransfersCount' => [
            'application/json',
        ],
        'ticketsGetTickets' => [
            'application/json',
        ],
        'ticketsGetTicketsCount' => [
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
     * Operation ticketsGetHistoricalTicketBalances
     *
     * Get historical ticket balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\TicketBalanceShort[]
     */
    public function ticketsGetHistoricalTicketBalances(
        int $level,
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0]
    ): array
    {
        list($response) = $this->ticketsGetHistoricalTicketBalancesWithHttpInfo($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetHistoricalTicketBalancesWithHttpInfo
     *
     * Get historical ticket balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\TicketBalanceShort[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetHistoricalTicketBalancesWithHttpInfo(
        int $level,
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0]
    ): array
    {
        $request = $this->ticketsGetHistoricalTicketBalancesRequest($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\TicketBalanceShort[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\TicketBalanceShort[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\TicketBalanceShort[]', []),
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

            $returnType = '\Tzkt\Model\TicketBalanceShort[]';
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
                        '\Tzkt\Model\TicketBalanceShort[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ticketsGetHistoricalTicketBalancesAsync
     *
     * Get historical ticket balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetHistoricalTicketBalancesAsync(
        int $level,
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0]
    ): PromiseInterface
    {
        return $this->ticketsGetHistoricalTicketBalancesAsyncWithHttpInfo($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetHistoricalTicketBalancesAsyncWithHttpInfo
     *
     * Get historical ticket balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetHistoricalTicketBalancesAsyncWithHttpInfo(
        int $level,
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\TicketBalanceShort[]';
        $request = $this->ticketsGetHistoricalTicketBalancesRequest($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'ticketsGetHistoricalTicketBalances'
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetHistoricalTicketBalancesRequest(
        int $level,
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0]
    ): Request
    {

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $level when calling ticketsGetHistoricalTicketBalances'
            );
        }








        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetHistoricalTicketBalances, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetHistoricalTicketBalances, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tickets/historical_balances/{level}';
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
            $ticket_id,
            'ticket.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
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
     * Operation ticketsGetTicketBalances
     *
     * Get ticket balances
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\TicketBalance[]
     */
    public function ticketsGetTicketBalances(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalances'][0]
    ): array
    {
        list($response) = $this->ticketsGetTicketBalancesWithHttpInfo($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketBalancesWithHttpInfo
     *
     * Get ticket balances
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\TicketBalance[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketBalancesWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalances'][0]
    ): array
    {
        $request = $this->ticketsGetTicketBalancesRequest($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\TicketBalance[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\TicketBalance[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\TicketBalance[]', []),
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

            $returnType = '\Tzkt\Model\TicketBalance[]';
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
                        '\Tzkt\Model\TicketBalance[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ticketsGetTicketBalancesAsync
     *
     * Get ticket balances
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketBalancesAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalances'][0]
    ): PromiseInterface
    {
        return $this->ticketsGetTicketBalancesAsyncWithHttpInfo($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketBalancesAsyncWithHttpInfo
     *
     * Get ticket balances
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketBalancesAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalances'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\TicketBalance[]';
        $request = $this->ticketsGetTicketBalancesRequest($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'ticketsGetTicketBalances'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketBalancesRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalances'][0]
    ): Request
    {


















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTicketBalances, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTicketBalances, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tickets/balances';
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
            $ticket_id,
            'ticket.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_type,
            'ticket.rawType', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_content,
            'ticket.rawContent', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content,
            'ticket.content', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_type_hash,
            'ticket.typeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content_hash,
            'ticket.contentHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
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
            $balance,
            'balance', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transfers_count,
            'transfersCount', // param base name
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
     * Operation ticketsGetTicketBalancesCount
     *
     * Get ticket balances count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function ticketsGetTicketBalancesCount(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0]
    ): int
    {
        list($response) = $this->ticketsGetTicketBalancesCountWithHttpInfo($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketBalancesCountWithHttpInfo
     *
     * Get ticket balances count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketBalancesCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0]
    ): array
    {
        $request = $this->ticketsGetTicketBalancesCountRequest($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Operation ticketsGetTicketBalancesCountAsync
     *
     * Get ticket balances count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketBalancesCountAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0]
    ): PromiseInterface
    {
        return $this->ticketsGetTicketBalancesCountAsyncWithHttpInfo($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketBalancesCountAsyncWithHttpInfo
     *
     * Get ticket balances count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketBalancesCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->ticketsGetTicketBalancesCountRequest($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Create request for operation 'ticketsGetTicketBalancesCount'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketBalancesCountRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $account = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetIdParameter $transfers_count = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0]
    ): Request
    {

















        $resourcePath = '/v1/tickets/balances/count';
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
            $ticket_id,
            'ticket.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_type,
            'ticket.rawType', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_content,
            'ticket.rawContent', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content,
            'ticket.content', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_type_hash,
            'ticket.typeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content_hash,
            'ticket.contentHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
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
            $balance,
            'balance', // param base name
            '\Tzkt\Model\NatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transfers_count,
            'transfersCount', // param base name
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
     * Operation ticketsGetTicketTransfers
     *
     * Get ticket transfers
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\TicketTransfer[]
     */
    public function ticketsGetTicketTransfers(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0]
    ): array
    {
        list($response) = $this->ticketsGetTicketTransfersWithHttpInfo($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketTransfersWithHttpInfo
     *
     * Get ticket transfers
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\TicketTransfer[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketTransfersWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0]
    ): array
    {
        $request = $this->ticketsGetTicketTransfersRequest($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\TicketTransfer[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\TicketTransfer[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\TicketTransfer[]', []),
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

            $returnType = '\Tzkt\Model\TicketTransfer[]';
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
                        '\Tzkt\Model\TicketTransfer[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ticketsGetTicketTransfersAsync
     *
     * Get ticket transfers
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketTransfersAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0]
    ): PromiseInterface
    {
        return $this->ticketsGetTicketTransfersAsyncWithHttpInfo($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketTransfersAsyncWithHttpInfo
     *
     * Get ticket transfers
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketTransfersAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\TicketTransfer[]';
        $request = $this->ticketsGetTicketTransfersRequest($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'ticketsGetTicketTransfers'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketTransfersRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0]
    ): Request
    {




















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTicketTransfers, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTicketTransfers, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tickets/transfers';
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
            $ticket_id,
            'ticket.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_type,
            'ticket.rawType', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_content,
            'ticket.rawContent', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content,
            'ticket.content', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_type_hash,
            'ticket.typeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content_hash,
            'ticket.contentHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
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
            $transfer_ticket_id,
            'transferTicketId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $smart_rollup_execute_id,
            'smartRollupExecuteId', // param base name
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
     * Operation ticketsGetTicketTransfersCount
     *
     * Get ticket transfers count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function ticketsGetTicketTransfersCount(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0]
    ): int
    {
        list($response) = $this->ticketsGetTicketTransfersCountWithHttpInfo($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketTransfersCountWithHttpInfo
     *
     * Get ticket transfers count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketTransfersCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0]
    ): array
    {
        $request = $this->ticketsGetTicketTransfersCountRequest($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $contentType);

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
     * Operation ticketsGetTicketTransfersCountAsync
     *
     * Get ticket transfers count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketTransfersCountAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0]
    ): PromiseInterface
    {
        return $this->ticketsGetTicketTransfersCountAsyncWithHttpInfo($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketTransfersCountAsyncWithHttpInfo
     *
     * Get ticket transfers count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketTransfersCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->ticketsGetTicketTransfersCountRequest($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $contentType);

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
     * Create request for operation 'ticketsGetTicketTransfersCount'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BlocksGetAnyofParameter|null $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter|null $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter|null $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketTransfersCountRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $ticket_id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticket_ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $ticket_raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $ticket_content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $ticket_content_hash = null,
        ?\Tzkt\Model\BlocksGetAnyofParameter $anyof = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $from = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $to = null,
        ?\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter $amount = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id = null,
        ?\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id = null,
        string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0]
    ): Request
    {



















        $resourcePath = '/v1/tickets/transfers/count';
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
            $ticket_id,
            'ticket.id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_type,
            'ticket.rawType', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_content,
            'ticket.rawContent', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content,
            'ticket.content', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_type_hash,
            'ticket.typeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content_hash,
            'ticket.contentHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
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
            $transfer_ticket_id,
            'transferTicketId', // param base name
            '\Tzkt\Model\Int64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $smart_rollup_execute_id,
            'smartRollupExecuteId', // param base name
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
     * Operation ticketsGetTickets
     *
     * Get tickets
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Ticket[]
     */
    public function ticketsGetTickets(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTickets'][0]
    ): array
    {
        list($response) = $this->ticketsGetTicketsWithHttpInfo($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketsWithHttpInfo
     *
     * Get tickets
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Ticket[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketsWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTickets'][0]
    ): array
    {
        $request = $this->ticketsGetTicketsRequest($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\Ticket[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Ticket[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Ticket[]', []),
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

            $returnType = '\Tzkt\Model\Ticket[]';
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
                        '\Tzkt\Model\Ticket[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ticketsGetTicketsAsync
     *
     * Get tickets
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketsAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTickets'][0]
    ): PromiseInterface
    {
        return $this->ticketsGetTicketsAsyncWithHttpInfo($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketsAsyncWithHttpInfo
     *
     * Get tickets
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketsAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTickets'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Ticket[]';
        $request = $this->ticketsGetTicketsRequest($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'ticketsGetTickets'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketsRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['ticketsGetTickets'][0]
    ): Request
    {















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTickets, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTickets, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tickets';
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
            $ticketer,
            'ticketer', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $raw_type,
            'rawType', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $raw_content,
            'rawContent', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $content,
            'content', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type_hash,
            'typeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $content_hash,
            'contentHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
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
     * Operation ticketsGetTicketsCount
     *
     * Get tickets count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function ticketsGetTicketsCount(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketsCount'][0]
    ): int
    {
        list($response) = $this->ticketsGetTicketsCountWithHttpInfo($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketsCountWithHttpInfo
     *
     * Get tickets count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketsCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketsCount'][0]
    ): array
    {
        $request = $this->ticketsGetTicketsCountRequest($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Operation ticketsGetTicketsCountAsync
     *
     * Get tickets count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketsCountAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketsCount'][0]
    ): PromiseInterface
    {
        return $this->ticketsGetTicketsCountAsyncWithHttpInfo($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketsCountAsyncWithHttpInfo
     *
     * Get tickets count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function ticketsGetTicketsCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketsCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->ticketsGetTicketsCountRequest($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Create request for operation 'ticketsGetTicketsCount'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\TicketsGetTicketsCountRawTypeParameter|null $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketsCountRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $ticketer = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_type = null,
        ?\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter $raw_content = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $content = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $content_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $first_minter = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['ticketsGetTicketsCount'][0]
    ): Request
    {














        $resourcePath = '/v1/tickets/count';
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
            $ticketer,
            'ticketer', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $raw_type,
            'rawType', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $raw_content,
            'rawContent', // param base name
            '\Tzkt\Model\MichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $content,
            'content', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type_hash,
            'typeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $content_hash,
            'contentHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
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
